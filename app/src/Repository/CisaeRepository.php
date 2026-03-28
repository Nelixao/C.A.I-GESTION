<?php

namespace App\Repository;

use App\Entity\Cisae;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cisae>
 */
class CisaeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cisae::class);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.status as estado, COUNT(c.id) as total')
            ->groupBy('c.status')
            ->getQuery()
            ->getResult();
    }

    public function countByArea(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.area as area, COUNT(c.id) as total')
            ->groupBy('c.area')
            ->orderBy('total', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function countThisMonth(): int
    {
        $start = new \DateTimeImmutable('first day of this month 00:00:00');
        $end   = new \DateTimeImmutable('first day of next month 00:00:00');
        return (int) $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.createdAt >= :start AND c.createdAt < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countLastMonth(): int
    {
        $start = new \DateTimeImmutable('first day of last month 00:00:00');
        $end   = new \DateTimeImmutable('first day of this month 00:00:00');
        return (int) $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.createdAt >= :start AND c.createdAt < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /** Returns CISAE records with fechaLimite within the next $days days */
    public function findUpcoming(int $days = 14): array
    {
        $now = new \DateTime();
        $limit = (new \DateTime())->modify("+$days days");
        return $this->createQueryBuilder('c')
            ->where('c.fechaLimite >= :now AND c.fechaLimite <= :limit')
            ->setParameter('now', $now)
            ->setParameter('limit', $limit)
            ->orderBy('c.fechaLimite', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
