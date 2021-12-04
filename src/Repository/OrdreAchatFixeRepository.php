<?php

namespace App\Repository;

use App\Entity\OrdreAchatFixe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrdreAchatFixe|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdreAchatFixe|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdreAchatFixe[]    findAll()
 * @method OrdreAchatFixe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdreAchatFixeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdreAchatFixe::class);
    }

    // /**
    //  * @return OrdreAchatFixe[] Returns an array of OrdreAchatFixe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrdreAchatFixe
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
