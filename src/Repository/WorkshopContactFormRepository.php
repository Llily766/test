<?php

namespace App\Repository;

use App\Entity\WorkshopContactForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkshopContactForm>
 *
 * @method WorkshopContactForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkshopContactForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkshopContactForm[]    findAll()
 * @method WorkshopContactForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkshopContactFormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkshopContactForm::class);
    }

//    /**
//     * @return WorkshopContactForm[] Returns an array of WorkshopContactForm objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WorkshopContactForm
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
