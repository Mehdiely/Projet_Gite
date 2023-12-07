<?php

namespace App\Repository;

use App\Entity\EquipementExt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EquipementExt>
 *
 * @method EquipementExt|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipementExt|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipementExt[]    findAll()
 * @method EquipementExt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipementExtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipementExt::class);
    }

//    /**
//     * @return EquipementExt[] Returns an array of EquipementExt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EquipementExt
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
