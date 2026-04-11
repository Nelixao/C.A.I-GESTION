<?php

namespace App\Controller;

use App\Repository\CisaeRepository;
use App\Repository\CircularRepository;
use App\Repository\CorrespondenceRepository;
use App\Repository\NotaInformativaRepository;
use App\Repository\OficioRepository;
use App\Repository\ScannerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        OficioRepository          $oficioRepo,
        CorrespondenceRepository  $correspondenceRepo,
        CircularRepository        $circularRepo,
        ScannerRepository         $scannerRepo,
        NotaInformativaRepository $notaRepo,
        CisaeRepository           $cisaeRepo
    ): Response {
        // Distribución de estados combinada para la gráfica de dona
        $allStatuses = [];
        foreach ([
            $oficioRepo->countByStatus(),
            $correspondenceRepo->countByStatus(),
            $circularRepo->countByStatus(),
        ] as $rows) {
            foreach ($rows as $r) {
                $k = $r['estado'] ?? 'Sin estado';
                $allStatuses[$k] = ($allStatuses[$k] ?? 0) + (int) $r['total'];
            }
        }
        arsort($allStatuses);

        return $this->render('main/index.html.twig', [
            'oficiosCount'         => $oficioRepo->countAll(),
            'correspondencesCount' => $correspondenceRepo->count([]),
            'circularesCount'      => $circularRepo->count([]),
            'scansCount'           => $scannerRepo->count([]),
            'notasCount'           => $notaRepo->count([]),
            'cisaeCount'           => $cisaeRepo->count([]),
            'statusDistribution'   => $allStatuses,
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(
        OficioRepository          $oficioRepo,
        CorrespondenceRepository  $correspondenceRepo,
        CircularRepository        $circularRepo,
        ScannerRepository         $scannerRepo,
        CisaeRepository           $cisaeRepo,
        NotaInformativaRepository $notaRepo
    ): Response {
        // Totales
        $oficiosCount         = $oficioRepo->countAll();
        $correspondencesCount = $correspondenceRepo->count([]);
        $circularesCount      = $circularRepo->count([]);
        $notasCount           = $notaRepo->count([]);
        $scansCount           = $scannerRepo->count([]);

        // Tendencias (% vs mes anterior)
        $trends = [
            'oficios'         => $this->trendPercent($oficioRepo->countThisMonth(),         $oficioRepo->countLastMonth()),
            'correspondences' => $this->trendPercent($correspondenceRepo->countThisMonth(), $correspondenceRepo->countLastMonth()),
            'circulares'      => $this->trendPercent($circularRepo->countThisMonth(),        $circularRepo->countLastMonth()),
            'notas'           => $this->trendPercent($notaRepo->countThisMonth(),            $notaRepo->countLastMonth()),
            'scans'           => 0,
        ];

        // Gráfica semanal (Lun-Dom de la semana actual)
        $monday = new \DateTimeImmutable('monday this week');
        $weeklyStats = [
            'labels'          => ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            'oficios'         => $oficioRepo->countByDaysOfWeek($monday),
            'correspondences' => $correspondenceRepo->countByDaysOfWeek($monday),
            'circulares'      => $circularRepo->countByDaysOfWeek($monday),
        ];

        // Distribución de estados combinada (todos los módulos)
        $allStatuses = [];
        foreach ([
            $oficioRepo->countByStatus(),
            $circularRepo->countByStatus(),
            $correspondenceRepo->countByStatus(),
            $cisaeRepo->countByStatus(),
            $notaRepo->countByStatus(),
        ] as $rows) {
            foreach ($rows as $r) {
                $k = $r['estado'] ?? 'Sin estado';
                $allStatuses[$k] = ($allStatuses[$k] ?? 0) + (int) $r['total'];
            }
        }
        arsort($allStatuses);

        // Top remitentes / áreas (Oficio)
        $senderRows = $oficioRepo->countBySender();
        $areaLabels = array_column($senderRows, 'area');
        $areaTotals = array_map('intval', array_column($senderRows, 'total'));

        // Próximos vencimientos CISAE (14 días)
        $cisaeProximos = $cisaeRepo->findUpcoming(14);

        $totalesPorModulo = [
            'Oficios'         => $oficiosCount,
            'Correspondencia' => $correspondencesCount,
            'Circulares'      => $circularesCount,
            'Notas'           => $notasCount,
            'Escáner'         => $scansCount,
        ];

        return $this->render('main/dashboard.html.twig', [
            // KPIs
            'oficiosCount'              => $oficiosCount,
            'correspondencesCount'      => $correspondencesCount,
            'circularesCount'           => $circularesCount,
            'notasCount'                => $notasCount,
            'scansCount'                => $scansCount,
            'totalesPorModulo'          => $totalesPorModulo,
            'totalesPorModuloValues'    => array_values($totalesPorModulo),

            // Tendencias
            'oficiosTrend'         => $trends['oficios'],
            'correspondencesTrend' => $trends['correspondences'],
            'circularesTrend'      => $trends['circulares'],
            'notasTrend'           => $trends['notas'],
            'scansTrend'           => $trends['scans'],

            // Gráficas
            'weeklyStats'               => $weeklyStats,
            'statusDistribution'        => $allStatuses,
            'statusDistributionValues'  => array_values($allStatuses),
            'areaEfficiency'            => ['labels' => $areaLabels, 'efficiency' => $areaTotals],

            // Tablas
            'cisaiProximos'        => $cisaeProximos,
            'recentOficios'        => $oficioRepo->findRecent(10),
            'activeCirculares'     => $circularRepo->findBy([], ['id' => 'DESC'], 5),
        ]);
    }

    private function trendPercent(int $current, int $last): int
    {
        if ($last === 0) {
            return $current > 0 ? 100 : 0;
        }
        return (int) round(($current - $last) / $last * 100);
    }
}
