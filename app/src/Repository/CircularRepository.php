<?php

namespace App\Repository;

use App\Entity\Circular;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Circular>
 */
class CircularRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Circular::class);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.status as estado, COUNT(c.id) as total')
            ->groupBy('c.status')
            ->getQuery()
            ->getResult();
    }

    public function countByTargetGroup(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.target_group as area, COUNT(c.id) as total')
            ->groupBy('c.target_group')
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
            ->where('c.created_at >= :start AND c.created_at < :end')
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
            ->where('c.created_at >= :start AND c.created_at < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countByDaysOfWeek(\DateTimeImmutable $weekStart): array
    {
        $counts = [];
        for ($i = 0; $i < 7; $i++) {
            $day     = $weekStart->modify("+$i days")->setTime(0, 0, 0);
            $nextDay = $day->modify('+1 day');
            $counts[] = (int) $this->createQueryBuilder('c')
                ->select('COUNT(c.id)')
                ->where('c.created_at >= :start AND c.created_at < :end')
                ->setParameter('start', $day)
                ->setParameter('end', $nextDay)
                ->getQuery()
                ->getSingleScalarResult();
        }
        return $counts;
    }
}
