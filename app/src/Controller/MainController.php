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
        $oficiosCount = $oficioRepo->count([]);
        $correspondencesCount = $correspondenceRepo->count([]);
        $circularesCount = $circularRepo->count([]);
        $scansCount = $scannerRepo->count([]);

        // Actividad reciente (últimos 5 de cada uno)
        $recentOficios = $oficioRepo->findBy([], ['updated_at' => 'DESC', 'id' => 'DESC'], 5);
        // Nota: si la columna 'status' aún no existe en la BD, evitar filtrarla para no provocar error.
        $activeCirculares = $circularRepo->findBy([], ['date' => 'DESC'], 5);

        return $this->render('main/index.html.twig', [
            'oficiosCount' => $oficiosCount,
            'correspondencesCount' => $correspondencesCount,
            'circularesCount' => $circularesCount,
            'scansCount' => $scansCount,
            'recentOficios' => $recentOficios,
            'activeCirculares' => $activeCirculares,
        ]);
    }
}
