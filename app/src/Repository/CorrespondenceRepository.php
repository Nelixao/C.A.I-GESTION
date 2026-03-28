<?php

namespace App\Repository;

use App\Entity\Correspondence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Correspondence>
 */
class CorrespondenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Correspondence::class);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.status as estado, COUNT(c.id) as total')
            ->groupBy('c.status')
            ->getQuery()
            ->getResult();
    }

    public function countBySender(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.sender as area, COUNT(c.id) as total')
            ->groupBy('c.sender')
            ->orderBy('total', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function countThisMonth(): int
    {
        $start = (new \DateTime('first day of this month'))->setTime(0, 0, 0);
        $end   = (new \DateTime('first day of next month'))->setTime(0, 0, 0);
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
        $start = (new \DateTime('first day of last month'))->setTime(0, 0, 0);
        $end   = (new \DateTime('first day of this month'))->setTime(0, 0, 0);
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
            $day     = \DateTime::createFromImmutable($weekStart->modify("+$i days")->setTime(0, 0, 0));
            $nextDay = clone $day;
            $nextDay->modify('+1 day');
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
