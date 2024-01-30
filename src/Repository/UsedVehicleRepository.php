<?php

namespace App\Repository;

use App\Entity\UsedVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsedVehicle>
 *
 * @method UsedVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsedVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsedVehicle[]    findAll()
 * @method UsedVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsedVehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsedVehicle::class);
    }

//    /**
//     * @return UsedVehicle[] Returns an array of UsedVehicle objects
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

//    public function findOneBySomeField($value): ?UsedVehicle
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
