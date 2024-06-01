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


   public function paginationQuery()
   {
       return $this->createQueryBuilder('p')
           ->orderBy('p.id', 'ASC')
           ->getQuery()
       ;
   }

}
