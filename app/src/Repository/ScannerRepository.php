<?php

namespace App\Repository;

use App\Entity\Scanner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Scanner>
 */
class ScannerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scanner::class);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('s')
            ->select('s.status as estado, COUNT(s.id) as total')
            ->groupBy('s.status')
            ->getQuery()
            ->getResult();
    }
}
