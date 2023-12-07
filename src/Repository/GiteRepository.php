<?php

namespace App\Repository;

use App\Entity\Gite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gite>
 *
 * @method Gite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gite[]    findAll()
 * @method Gite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gite::class);
    }
    public function findByCriteriaAndEquipements($criteria,$serviceCriteria,$equipementIntCriteria, $equipementCriteria)
    {
        $qb = $this->createQueryBuilder('g');
    
        // Appliquer les critères de localisation
        foreach ($criteria as $field => $value) {
            $qb->andWhere("g.$field = :$field")
               ->setParameter($field, $value);
        }
    
        // Appliquer les critères d'équipement si nécessaire
        if (!empty($equipementCriteria)) {
            $qb->leftJoin('App\Entity\EquipementExt', 'e', 'WITH', 'g.id = e.id_giteEEX');
    
            foreach ($equipementCriteria as $field => $value) {
                $qb->andWhere("e.$field = :$field")
                   ->setParameter($field, $value);
            }
        }

        if (!empty ($equipementIntCriteria)) {
            $qb->leftJoin('App\Entity\EquipementInt', 'e', 'WITH', 'g.id = e.gite_idEI');
    
            foreach ($equipementIntCriteria as $field => $value) {
                $qb->andWhere("e.$field = :$field")
                   ->setParameter($field, $value);
            }
        }
        if (!empty ($serviceCriteria)) {
            $qb->leftJoin('App\Entity\Service', 'e', 'WITH', 'g.id = e.id_giteS');
    
            foreach ($serviceCriteria as $field => $value) {
                $qb->andWhere("e.$field = :$field")
                   ->setParameter($field, $value);
            }
        }
    
        return $qb->getQuery()->getResult();
    }
    
    
    
//    /**
//     * @return Gite[] Returns an array of Gite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gite
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
