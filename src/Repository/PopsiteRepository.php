<?php

namespace App\Repository;

use App\Entity\Popsite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Popsite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Popsite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Popsite[]    findAll()
 * @method Popsite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PopsiteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Popsite::class);
    }

    // /**
    //  * @return Popsite[] Returns an array of Popsite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Popsite
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
