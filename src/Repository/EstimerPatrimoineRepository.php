<?php

namespace App\Repository;

use App\Entity\EstimerPatrimoine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EstimerPatrimoine|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstimerPatrimoine|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstimerPatrimoine[]    findAll()
 * @method EstimerPatrimoine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstimerPatrimoineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstimerPatrimoine::class);
    }

    // /**
    //  * @return EstimerPatrimoine[] Returns an array of EstimerPatrimoine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EstimerPatrimoine
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
