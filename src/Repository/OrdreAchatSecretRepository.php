<?php

namespace App\Repository;

use App\Entity\OrdreAchatSecret;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrdreAchatSecret|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdreAchatSecret|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdreAchatSecret[]    findAll()
 * @method OrdreAchatSecret[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdreAchatSecretRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdreAchatSecret::class);
    }

    // /**
    //  * @return OrdreAchatSecret[] Returns an array of OrdreAchatSecret objects
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
    public function findOneBySomeField($value): ?OrdreAchatSecret
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
