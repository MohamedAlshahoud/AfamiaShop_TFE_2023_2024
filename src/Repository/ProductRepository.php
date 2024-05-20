<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Category;
use App\Model\SearchData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query;
use Doctrine\DBAL\Query\QueryBuilder as QueryQueryBuilder;
use Doctrine\ORM\Query as ORMQuery;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
    * @return Product[] Returns an array of Product objects
    */
   public function findWithSearch($name,$categorie, $gendre, $color)
   {
       $query = $this->createQueryBuilder('p');
       
       //product
        if($name != 'all'){
        $query = $query->andWhere('p.name like :val')
                       ->setParameter('val', "%$name%");
       }

       //categorie
        if($categorie != 'all'){
            $query = $query->join('p.categories', 'c')
                           ->andWhere('c.id IN (:category)')
                           ->setParameter('category', $categorie);
        }

        //gendre
        if($gendre != 'all'){
            $query = $query->join('p.genders', 's')
                           ->andWhere('s.id IN (:gender)')
                           ->setParameter('gender', $gendre);
        }

        //color
        if($color != 'all'){
            $query = $query->join('p.colors', 'cl')
                           ->andWhere('cl.id IN (:color)')
                           ->setParameter('color', $color);
        }
    
       return $query->getQuery()->getResult();
   }


   public function findByFilter($categorie, $gender, $color)
   {
       $query = $this->createQueryBuilder('p');

       //categorie
        if($categorie != 'all'){
            $query = $query->join('p.categories', 'c')
                           ->andWhere('c.id IN (:category)')
                           ->setParameter('category', $categorie);
        }

        //gender
        if($gender != 'all'){
            $query = $query->join('p.genders', 's')
                           ->andWhere('s.id IN (:gender)')
                           ->setParameter('gender', $gender);
        }

        //color
        if($color != 'all'){
            $query = $query->join('p.colors', 'cl')
                           ->andWhere('cl.id IN (:color)')
                           ->setParameter('color', $color);
        }
    
       return $query->getQuery()->getResult();
   }
    // public function searchProduct($criteria, $name)
    // {
    //     return $this->createQueryBuilder('p')
    //         ->leftJoin('p.categories', 'category')
    //         ->where('category.name = :categoryName')
    //         ->setParameter('categoryName', $criteria['category']->getName())
    //         ->andWhere('p.color = :color')
    //         ->setParameter('color', $criteria['color'])
    //         ->andWhere('p.size = :size')
    //         ->setParameter('size', $criteria['size'])
    //         ->andWhere('p.price > :minimumPrice * 100')
    //         ->setParameter('minimumPrice' , $criteria['minimumPrice'])
    //         ->andWhere('p.price < :maximumPrice *100')
    //         ->setParameter('maximumPrice' , $criteria['maximumPrice'])
    //         ->andWhere('p.name LIKE :product')
    //         ->setParameter('product', '%' . $name . '%')
    //         // ->andWhere('MATCH_AGAINST(p.name, p.description) AGAINST (:mots boolean) > 0')
    //         // ->setParameter('mots', $criteria['mots'])
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    // public function search(array $criteria)
    // {
    //     $queryBuilder = $this->createQueryBuilder('product');

    //     // Filtrer par taille
    //     if (isset($criteria['sizes'])) {
    //         $queryBuilder->where('product.sizes IN (:sizes)');
    //         $queryBuilder->setParameter('sizes', $criteria['sizes']);
    //     }

    //     // Filtrer par catégorie
    //     if (isset($criteria['categories'])) {
    //         $queryBuilder->where('product.categories IN (:category)');
    //         $queryBuilder->setParameter('categories', $criteria['categories']);
    //     }

    //     return $queryBuilder->getQuery()->getResult();
    // }

    // /**
    // * @param SearchData $searchData
    // */
    // public function findBySearch(SearchData $searchData )
    // {
    //    $products = $this->createQueryBuilder('p');
    
    //    if(!empty($searchData->q)){
    //     $products = $products
    //        ->andWhere('p.name LIKE :q')
    //        ->setParameter('q', "%{$searchData->q}%");
    //    }

    //    if(!empty($searchData->categories)){
    //     $products = $products
    //         ->leftJoin('p.categories', 'category')
    //         ->where('category.name = :categoryName')
    //         ->setParameter('categoryName', $searchData->cate);
    //    }

    //    if(!empty($searchData->q) && !empty($searchData->categories)){
    //     $products = $products
    //        ->leftJoin('p.categories', 'category')
    //        ->where('category.name = :categoryName')
    //        ->andWhere('p.name LIKE :q')
    //        ->setParameter('categoryName', $searchData->categories)
    //        ->setParameter('q', "%{$searchData->q}%");
    //    }
       
    //    $products = $products
    //         ->getQuery()
    //         ->getResult();
    //     return $products;
    // }

    // 
    

    public function findProductsPaginated(int $page, int $id, int $limit = 6): array
    {
        $limit = abs($limit);

        $result = [];

        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('c', 'p')
            ->from('App\Entity\Product', 'p')
            ->join('p.categories', 'c')
            ->where("c.id = '$id'")
            ->setMaxResults($limit)
            ->setFirstResult(($page * $limit) - $limit);

        $paginator = new Paginator($query);
        $data = $paginator->getQuery()->getResult();
        
        //On vérifie qu'on a des données
        if(empty($data)){
            return $result;
        }

        //On calcule le nombre de pages
        $pages = ceil($paginator->count() / $limit);

        // On remplit le tableau
        $result['data'] = $data;
        $result['pages'] = $pages;
        $result['page'] = $page;
        $result['limit'] = $limit;

        return $result;
    }



    // public function findProductsPag(int $page, int $limit = 6): array
    // {
    //     $limit = abs($limit);

    //     $result = [];

    //     $query = $this->getEntityManager()->createQueryBuilder()
    //         ->select('c', 'p')
    //         ->from('App\Entity\Product', 'p')
    //         ->setMaxResults($limit)
    //         ->setFirstResult(($page * $limit) - $limit);

    //     $paginator = new Paginator($query);
    //     $data = $paginator->getQuery()->getResult();
        
    //     //On vérifie qu'on a des données
    //     if(empty($data)){
    //         return $result;
    //     }

    //     //On calcule le nombre de pages
    //     $pages = ceil($paginator->count() / $limit);

    //     // On remplit le tableau
    //     $result['data'] = $data;
    //     $result['pages'] = $pages;
    //     $result['page'] = $page;
    //     $result['limit'] = $limit;

    //     return $result;
    // }


   public function paginationQuery()
   {
       return $this->createQueryBuilder('p')
           ->orderBy('p.id', 'ASC')
           ->getQuery()
       ;
   }



    // public function search($mots = null, $categorie = null, $minprice = null, $maxprice = null, $size = null){
    //     $query = $this->createQueryBuilder('p');
    //     if($mots != null){
    //         $query->andWhere('MATCH_AGAINST(p.name, p.description, p.color, p.size) AGAINST (:mots boolean) > 0')
    //             ->setParameter('mots', $mots);
    //     }
    //     if($categorie != null){
    //         $query->leftJoin('p.categories', 'c');
    //         $query->andWhere('c.id = :id')
    //             ->setParameter('id', $categorie);
    //     }
    //     if ($minprice != null && $maxprice != null) {
    //         $query->andWhere('p.price BETWEEN :min AND :max');
    //         $query->setParameter('min', ($minprice*100));
    //         $query->setParameter('max', ($maxprice*100));
    //     } elseif ($minprice != null && $maxprice == null) {
    //         $query->andWhere('p.price >= :min');
    //         $query->setParameter('min', $minprice);
    //     } elseif ($maxprice != null && $minprice == null) {
    //         $query->andWhere('p.price <= :max');
    //         $query->setParameter('max', $maxprice);
    //     }
        // if($size != null){
        //     $query->join('p.sizes', 's');
        //     $query->andWhere('s.id = :id')
        //         ->setParameter('id', $size);
        // }
        
    //     return $query->getQuery()->getResult();
    // }

    //    public function findOneBySomeField($value): ?Product
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
