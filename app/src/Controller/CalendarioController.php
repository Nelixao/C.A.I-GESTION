<?php

namespace App\Controller;

use App\Repository\CisaeRepository;
use App\Repository\CircularRepository;
use App\Repository\CorrespondenceRepository;
use App\Repository\NotaInformativaRepository;
use App\Repository\OficioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/calendario')]
final class CalendarioController extends AbstractController
{
    #[Route('', name: 'app_calendario', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('calendario/index.html.twig');
    }

    #[Route('/events', name: 'app_calendario_events', methods: ['GET'])]
    public function events(
        OficioRepository          $oficioRepo,
        CorrespondenceRepository  $corrRepo,
        CircularRepository        $circularRepo,
        CisaeRepository           $cisaeRepo,
        NotaInformativaRepository $notaRepo
    ): JsonResponse {
        $events = [];

        // ── Oficios (color dorado) ────────────────────────────────
        foreach ($oficioRepo->findAll() as $o) {
            if ($o->getDate()) {
                $events[] = [
                    'title'           => ($o->getNumOficio() ?? 'Oficio') . ': ' . mb_strimwidth((string)$o->getTitle(), 0, 35, '…'),
                    'start'           => $o->getDate()->format('Y-m-d'),
                    'color'           => '#a57f2c',
                    'textColor'       => '#fff',
                    'url'             => $this->generateUrl('app_oficio_show', ['id' => $o->getId()]),
                    'extendedProps'   => ['modulo' => 'Oficio', 'status' => $o->getStatus()],
                ];
            }
        }

        // ── Correspondencia (color vino) ──────────────────────────
        foreach ($corrRepo->findAll() as $c) {
            if ($c->getDate()) {
                $events[] = [
                    'title'         => ($c->getNumControl() ?? 'Corr') . ': ' . mb_strimwidth((string)$c->getSubject(), 0, 35, '…'),
                    'start'         => $c->getDate()->format('Y-m-d'),
                    'color'         => '#9b2247',
                    'textColor'     => '#fff',
                    'url'           => $this->generateUrl('app_correspondence_show', ['id' => $c->getId()]),
                    'extendedProps' => ['modulo' => 'Correspondencia', 'status' => $c->getStatus()],
                ];
            }
        }

        // ── Circulares (color verde) ──────────────────────────────
        foreach ($circularRepo->findAll() as $ci) {
            if ($ci->getDate()) {
                $events[] = [
                    'title'         => ($ci->getNumCircular() ?? 'Circular') . ': ' . mb_strimwidth((string)$ci->getTitle(), 0, 35, '…'),
                    'start'         => $ci->getDate()->format('Y-m-d'),
                    'color'         => '#1e5b4f',
                    'textColor'     => '#fff',
                    'url'           => $this->generateUrl('app_circular_show', ['id' => $ci->getId()]),
                    'extendedProps' => ['modulo' => 'Circular', 'status' => $ci->getStatus()],
                ];
            }
        }

        // ── CISAE fechaLimite (color rojo) ────────────────────────
        foreach ($cisaeRepo->findAll() as $cs) {
            if ($cs->getFechaLimite()) {
                $events[] = [
                    'title'         => 'CISAE: ' . mb_strimwidth((string)$cs->getTitulo(), 0, 35, '…'),
                    'start'         => $cs->getFechaLimite()->format('Y-m-d'),
                    'color'         => '#c0392b',
                    'textColor'     => '#fff',
                    'url'           => $this->generateUrl('app_cisae_show', ['id' => $cs->getId()]),
                    'extendedProps' => ['modulo' => 'CISAE', 'status' => $cs->getStatus()],
                ];
            }
        }

        // ── NotaInformativa fechaLimite (color morado) ────────────
        foreach ($notaRepo->findAll() as $n) {
            if ($n->getFechaLimite()) {
                $events[] = [
                    'title'         => 'Nota: ' . mb_strimwidth((string)$n->getTitle(), 0, 35, '…'),
                    'start'         => $n->getFechaLimite()->format('Y-m-d'),
                    'color'         => '#6c3483',
                    'textColor'     => '#fff',
                    'extendedProps' => ['modulo' => 'Nota', 'status' => $n->getStatus()],
                ];
            }
        }

        return new JsonResponse($events);
    }
}
