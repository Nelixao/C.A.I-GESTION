<?php

namespace App\Repository;

use App\Entity\NotaInformativa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NotaInformativa>
 */
class NotaInformativaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotaInformativa::class);
    }

    public function countByStatus(): array
    {
        return $this->createQueryBuilder('n')
            ->select('n.status as estado, COUNT(n.id) as total')
            ->groupBy('n.status')
            ->getQuery()
            ->getResult();
    }

    public function countByArea(): array
    {
        return $this->createQueryBuilder('n')
            ->select('n.area as area, COUNT(n.id) as total')
            ->where('n.area IS NOT NULL')
            ->groupBy('n.area')
            ->orderBy('total', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    public function countThisMonth(): int
    {
        $start = new \DateTimeImmutable('first day of this month 00:00:00');
        $end   = new \DateTimeImmutable('first day of next month 00:00:00');
        return (int) $this->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.created_at >= :start AND n.created_at < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countLastMonth(): int
    {
        $start = new \DateTimeImmutable('first day of last month 00:00:00');
        $end   = new \DateTimeImmutable('first day of this month 00:00:00');
        return (int) $this->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.created_at >= :start AND n.created_at < :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
