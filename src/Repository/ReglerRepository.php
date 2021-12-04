<?php

namespace App\Repository;

use App\Entity\Regler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Regler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Regler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Regler[]    findAll()
 * @method Regler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Regler::class);
    }

    // /**
    //  * @return Regler[] Returns an array of Regler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Regler
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
