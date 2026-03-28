<?php

namespace App\Repository;

use App\Entity\Oficio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Oficio>
 */
class OficioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oficio::class);
    }

    /**
     * Cuenta oficios por estado (datos reales)
     */
    public function countByStatus(): array
    {
        return $this->createQueryBuilder('o')
            ->select('o.status as estado, COUNT(o.id) as total')
            ->groupBy('o.status')
            ->getQuery()
            ->getResult();
    }

    /**
     * Oficios cuya fecha_emision cae dentro de los próximos $days días
     */
    public function findUpcomingDeadlines(int $days = 7): array
    {
        $now    = new \DateTime();
        $future = (new \DateTime())->modify("+{$days} days");

        $oficios = $this->createQueryBuilder('o')
            ->where('o.fecha_emision >= :now AND o.fecha_emision <= :future')
            ->setParameter('now', $now->format('Y-m-d'))
            ->setParameter('future', $future->format('Y-m-d'))
            ->orderBy('o.fecha_emision', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $result = [];
        foreach ($oficios as $o) {
            $termino = $o->getFechaEmision();
            $dias    = $termino ? (int)(new \DateTime())->diff(\DateTime::createFromInterface($termino))->days : 0;
            $result[] = [
                'numero_oficio'  => $o->getNumOficio() ?? '#' . $o->getId(),
                'area'           => $o->getSender() ?? '—',
                'fecha_tramite'  => $o->getDate(),
                'fecha_termino'  => $termino ? \DateTime::createFromInterface($termino) : null,
                'dias_restantes' => $dias,
            ];
        }

        return $result;
    }

    /**
     * Cuenta oficios creados cada día de la semana dada (Lun–Dom).
     * Devuelve array de 7 enteros.
     */
    public function countByWeek(\DateTime $start, \DateTime $end): array
    {
        $startImmutable = \DateTimeImmutable::createFromMutable($start);
        $endImmutable   = \DateTimeImmutable::createFromMutable($end)->setTime(23, 59, 59);

        $entities = $this->createQueryBuilder('o')
            ->where('o.created_at >= :start AND o.created_at <= :end')
            ->setParameter('start', $startImmutable)
            ->setParameter('end', $endImmutable)
            ->getQuery()
            ->getResult();

        $counts = array_fill(0, 7, 0);
        foreach ($entities as $entity) {
            $createdAt = $entity->getCreatedAt();
            if ($createdAt) {
                $dayOfWeek = (int)$createdAt->format('N') - 1; // 0=Lun … 6=Dom
                $counts[$dayOfWeek]++;
            }
        }

        return $counts;
    }

    /**
     * Distribución de estados para gráfica de dona (datos reales)
     */
    public function getStatusDistribution(): array
    {
        $rows = $this->countByStatus();
        $result = [];
        foreach ($rows as $row) {
            $result[$row['estado']] = (int)$row['total'];
        }
        return $result;
    }

    /**
     * Top 5 remitentes con más oficios (usado en gráfica de barras horizontal)
     */
    public function getAreaEfficiency(): array
    {
        $rows = $this->createQueryBuilder('o')
            ->select('o.sender as area, COUNT(o.id) as total')
            ->where('o.sender IS NOT NULL')
            ->groupBy('o.sender')
            ->orderBy('total', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return [
            'labels'     => array_column($rows, 'area'),
            'efficiency' => array_map('intval', array_column($rows, 'total')),
        ];
    }

    /**
     * Oficios más recientes
     */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Cuenta todos los oficios
     */
    public function countAll(): int
    {
        return $this->count([]);
    }

    /**
     * Oficios marcados como CISAE, ordenados por urgencia (fecha_emision ASC)
     */
    public function findCisae(): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.isCisae = :val')
            ->setParameter('val', true)
            ->orderBy('o.fecha_emision', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Eventos para el calendario (oficios con fecha_emision o date)
     */
    public function findForCalendar(): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.fecha_emision IS NOT NULL OR o.date IS NOT NULL')
            ->getQuery()
            ->getResult();
    }
}
