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

    /**
     * Eventos para el calendario: circulares con fecha o fechaLimite
     */
    public function findForCalendar(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.fecha IS NOT NULL OR c.fechaLimite IS NOT NULL')
            ->getQuery()
            ->getResult();
    }

    /**
     * Cuenta circulares creadas cada día de la semana dada (Lun–Dom).
     * Devuelve array de 7 enteros.
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
}
