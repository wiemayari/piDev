<?php

namespace App\Repository;

use App\Entity\U8yg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<U8yg>
 *
 * @method U8yg|null find($id, $lockMode = null, $lockVersion = null)
 * @method U8yg|null findOneBy(array $criteria, array $orderBy = null)
 * @method U8yg[]    findAll()
 * @method U8yg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class U8ygRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, U8yg::class);
    }

//    /**
//     * @return U8yg[] Returns an array of U8yg objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?U8yg
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
