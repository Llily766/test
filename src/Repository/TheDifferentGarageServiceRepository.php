<?php

namespace App\Repository;

use App\Entity\TheDifferentGarageService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TheDifferentGarageService>
 *
 * @method TheDifferentGarageService|null find($id, $lockMode = null, $lockVersion = null)
 * @method TheDifferentGarageService|null findOneBy(array $criteria, array $orderBy = null)
 * @method TheDifferentGarageService[]    findAll()
 * @method TheDifferentGarageService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TheDifferentGarageServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TheDifferentGarageService::class);
    }

//    /**
//     * @return TheDifferentGarageService[] Returns an array of TheDifferentGarageService objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TheDifferentGarageService
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
