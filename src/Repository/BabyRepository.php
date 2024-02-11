<?php

namespace App\Repository;

use App\Entity\Baby;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Baby>
 *
 * @method Baby|null find($id, $lockMode = null, $lockVersion = null)
 * @method Baby|null findOneBy(array $criteria, array $orderBy = null)
 * @method Baby[]    findAll()
 * @method Baby[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BabyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Baby::class);
    }

//    /**
//     * @return Baby[] Returns an array of Baby objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Baby
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
