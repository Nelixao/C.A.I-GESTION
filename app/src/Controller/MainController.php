<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Renderiza la plantilla templates/main/index.html.twig
        return $this->render('main/index.html.twig', [
            'message' => '¡Bienvenida a la página principal!',
        ]);
    }
}
