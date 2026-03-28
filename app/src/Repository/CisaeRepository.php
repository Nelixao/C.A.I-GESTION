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

    /**
     * Expedientes ordenados por urgencia (fecha_termino ascendente, sin fecha al final)
     */
    public function findByUrgencia(): array
    {
        return $this->createQueryBuilder('c')
            ->addSelect('CASE WHEN c.fechaTermino IS NULL THEN 1 ELSE 0 END AS HIDDEN sort_null')
            ->orderBy('sort_null', 'ASC')
            ->addOrderBy('c.fechaTermino', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Expedientes con fecha_termino en los próximos $days días
     */
    public function findProximos(int $days = 7): array
    {
        $now    = new \DateTime();
        $future = (new \DateTime())->modify("+{$days} days");

        return $this->createQueryBuilder('c')
            ->where('c.fechaTermino >= :now AND c.fechaTermino <= :future')
            ->andWhere("c.estado != 'CERRADO'")
            ->setParameter('now', $now->format('Y-m-d'))
            ->setParameter('future', $future->format('Y-m-d'))
            ->orderBy('c.fechaTermino', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Eventos para el calendario
     */
    public function findForCalendar(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.id, c.numero, c.titulo, c.fechaInicio, c.fechaTermino, c.estado')
            ->getQuery()
            ->getResult();
    }
}
