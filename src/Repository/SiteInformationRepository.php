<?php

namespace App\Repository;

use App\Entity\SiteInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SiteInformation>
 *
 * @method SiteInformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteInformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteInformation[]    findAll()
 * @method SiteInformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteInformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteInformation::class);
    }

//    /**
//     * @return SiteInformation[] Returns an array of SiteInformation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SiteInformation
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
