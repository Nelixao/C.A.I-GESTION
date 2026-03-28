<?php
// src/Controller/MainController.php
namespace App\Controller;

use App\Repository\OficioRepository;
use App\Repository\CorrespondenceRepository;
use App\Repository\CircularRepository;
use App\Repository\ScannerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        OficioRepository $oficioRepo,
        CorrespondenceRepository $correspondenceRepo,
        CircularRepository $circularRepo,
        ScannerRepository $scannerRepo
    ): Response {
        $oficiosCount = $oficioRepo->countAll();
        $correspondencesCount = $correspondenceRepo->count([]);
        $circularesCount = $circularRepo->count([]);
        $scansCount = $scannerRepo->count([]);

        $recentOficios = $oficioRepo->findRecent(5);
        $activeCirculares = $circularRepo->findBy([], ['id' => 'DESC'], 5);

        return $this->render('main/index.html.twig', [
            'oficiosCount' => $oficiosCount,
            'correspondencesCount' => $correspondencesCount,
            'circularesCount' => $circularesCount,
            'scansCount' => $scansCount,
            'recentOficios' => $recentOficios,
            'activeCirculares' => $activeCirculares,
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(
        OficioRepository $oficioRepo,
        CorrespondenceRepository $correspondenceRepo,
        CircularRepository $circularRepo,
        ScannerRepository $scannerRepo
    ): Response {
        // Totales
        $oficiosCount = $oficioRepo->countAll();
        $correspondencesCount = $correspondenceRepo->count([]);
        $circularesCount = $circularRepo->count([]);
        $notasCount = 0; // Si tienes entidad Nota, actualiza esto
        $scansCount = $scannerRepo->count([]);

        // Datos para el dashboard
        $oficiosPorEstado = $oficioRepo->countByStatus();
        $cisaiProximos = $oficioRepo->findUpcomingDeadlines(7);
        $recentOficios = $oficioRepo->findRecent(10);
        $activeCirculares = $circularRepo->findBy([], ['id' => 'DESC'], 5);

        // Datos para gráficas
        $startOfWeek = new \DateTime('monday this week');
        $endOfWeek = new \DateTime('sunday this week');
        
        $weeklyStats = [
            'labels' => ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            'oficios' => $oficioRepo->countByWeek($startOfWeek, $endOfWeek),
            'correspondences' => [8, 12, 6, 10, 15, 2, 4], // Datos de ejemplo
            'circulares' => [5, 8, 4, 7, 12, 1, 2], // Datos de ejemplo
        ];

        $statusDistribution = $oficioRepo->getStatusDistribution();
        $areaEfficiency = $oficioRepo->getAreaEfficiency();

        // Tendencias (datos de ejemplo)
        $trends = [
            'oficios' => rand(-10, 20),
            'correspondences' => rand(-5, 15),
            'circulares' => rand(-8, 12),
            'notas' => rand(-3, 10),
            'scans' => rand(5, 30),
        ];

        return $this->render('main/dashboard.html.twig', [
            // KPIs principales
            'oficiosCount' => $oficiosCount,
            'correspondencesCount' => $correspondencesCount,
            'circularesCount' => $circularesCount,
            'notasCount' => $notasCount,
            'scansCount' => $scansCount,
            
            // Tendencias
            'oficiosTrend' => $trends['oficios'],
            'correspondencesTrend' => $trends['correspondences'],
            'circularesTrend' => $trends['circulares'],
            'notasTrend' => $trends['notas'],
            'scansTrend' => $trends['scans'],
            
            // Datos para gráficas
            'weeklyStats' => $weeklyStats,
            'statusDistribution' => $statusDistribution,
            'dailyTrends' => $oficioRepo->countByWeek($startOfWeek, $endOfWeek),
            'areaEfficiency' => $areaEfficiency,
            
            // Datos para tablas
            'oficiosPorEstado' => $oficiosPorEstado,
            'cisaiProximos' => $cisaiProximos,
            'recentOficios' => $recentOficios,
            'activeCirculares' => $activeCirculares,
        ]);
    }
}