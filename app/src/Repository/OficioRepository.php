<?php

namespace App\Repository;

use App\Entity\Oficio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Oficio>
 */
class OficioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oficio::class);
    }

    public function countAll(): int
    {
        return $this->count([]);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('o')
            ->select('o.status as estado, COUNT(o.id) as total')
            ->groupBy('o.status')
            ->getQuery()
            ->getResult();
    }

    public function countBySender(): array
    {
        return $this->createQueryBuilder('o')
            ->select('o.sender as area, COUNT(o.id) as total')
            ->groupBy('o.sender')
            ->orderBy('total', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function countThisMonth(): int
    {
        $start = new \DateTimeImmutable('first day of this month 00:00:00');
        $end   = new \DateTimeImmutable('first day of next month 00:00:00');
        return (int) $this->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.created_at >= :start AND o.created_at < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countLastMonth(): int
    {
        $start = new \DateTimeImmutable('first day of last month 00:00:00');
        $end   = new \DateTimeImmutable('first day of this month 00:00:00');
        return (int) $this->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.created_at >= :start AND o.created_at < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /** Returns array of 7 counts (Mon=0 … Sun=6) for the week containing $weekStart */
    public function countByDaysOfWeek(\DateTimeImmutable $weekStart): array
    {
        $counts = [];
        for ($i = 0; $i < 7; $i++) {
            $day     = $weekStart->modify("+$i days")->setTime(0, 0, 0);
            $nextDay = $day->modify('+1 day');
            $counts[] = (int) $this->createQueryBuilder('o')
                ->select('COUNT(o.id)')
                ->where('o.created_at >= :start AND o.created_at < :end')
                ->setParameter('start', $day)
                ->setParameter('end', $nextDay)
                ->getQuery()
                ->getSingleScalarResult();
        }
        return $counts;
    }

    public function findRecent(int $limit = 10): array
    {
        return $this->findBy([], ['id' => 'DESC'], $limit);
    }

    public function getStatusDistribution(): array
    {
        $rows = $this->countByStatus();
        $dist = [];
        foreach ($rows as $r) {
            $dist[$r['estado']] = (int) $r['total'];
        }
        return $dist;
    }
}
