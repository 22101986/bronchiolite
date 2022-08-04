<?php

namespace App\Repository;

use App\Entity\UsersCheckCsv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsersCheckCsv>
 *
 * @method UsersCheckCsv|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersCheckCsv|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersCheckCsv[]    findAll()
 * @method UsersCheckCsv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersCheckCsvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersCheckCsv::class);
    }

    public function add(UsersCheckCsv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UsersCheckCsv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return UsersCheckCsv[] Returns an array of UsersCheckCsv objects
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

//    public function findOneBySomeField($value): ?UsersCheckCsv
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
