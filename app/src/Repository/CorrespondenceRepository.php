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

    /**
     * Cuenta correspondencias creadas cada día de la semana dada (Lun–Dom).
     */
    public function countByWeek(\DateTime $start, \DateTime $end): array
    {
        $startImmutable = \DateTimeImmutable::createFromMutable($start);
        $endImmutable   = \DateTimeImmutable::createFromMutable($end)->setTime(23, 59, 59);

        $entities = $this->createQueryBuilder('c')
            ->where('c.createdAt >= :start AND c.createdAt <= :end')
            ->setParameter('start', $startImmutable)
            ->setParameter('end', $endImmutable)
            ->getQuery()
            ->getResult();

        $counts = array_fill(0, 7, 0);
        foreach ($entities as $entity) {
            $createdAt = $entity->getCreatedAt();
            if ($createdAt) {
                $dayOfWeek = (int)$createdAt->format('N') - 1;
                $counts[$dayOfWeek]++;
            }
        }

        return $counts;
    }

    /**
     * Eventos para el calendario: correspondencias con fechaLimite
     */
    public function findForCalendar(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.fechaLimite IS NOT NULL')
            ->getQuery()
            ->getResult();
    }
}
