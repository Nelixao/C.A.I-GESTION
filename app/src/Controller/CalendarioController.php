<?php

namespace App\Controller;

use App\Repository\CisaeRepository;
use App\Repository\CircularRepository;
use App\Repository\CorrespondenceRepository;
use App\Repository\OficioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/calendario')]
class CalendarioController extends AbstractController
{
    #[Route('', name: 'app_calendario_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('calendario/index.html.twig');
    }

    #[Route('/eventos', name: 'app_calendario_eventos', methods: ['GET'])]
    public function eventos(
        OficioRepository       $oficioRepo,
        CorrespondenceRepository $corrRepo,
        CircularRepository     $circularRepo,
        CisaeRepository        $cisaeRepo,
    ): JsonResponse {
        $events = [];
        $now    = new \DateTime();

        // ── Oficios (dorado) ──────────────────────────────────
        foreach ($oficioRepo->findForCalendar() as $o) {
            $startDate = $o->getFechaEmision() ?? $o->getDate();
            if (!$startDate) continue;

            $color = $o->isIsCisae() ? '#dc3545' : '#a57f2c';

            $events[] = [
                'id'    => 'o-'.$o->getId(),
                'title' => ($o->getNumOficio() ?? 'Oficio').' — '.mb_strimwidth($o->getTitle() ?? '', 0, 40, '…'),
                'start' => $startDate->format('Y-m-d'),
                'color' => $color,
                'url'   => $this->generateUrl('app_oficio_show', ['id' => $o->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
                'extendedProps' => ['tipo' => $o->isIsCisae() ? 'CISAE' : 'Oficio'],
            ];
        }

        // ── Correspondencias (vino) ───────────────────────────
        foreach ($corrRepo->findForCalendar() as $c) {
            $start = $c->getFechaRecepcion();
            $end   = $c->getFechaLimite();
            if (!$start) continue;

            $endAlerta = $end && ((clone $end)->diff($now)->days <= 3 && $end >= $now);

            $events[] = [
                'id'    => 'c-'.$c->getId(),
                'title' => ($c->getNumControl() ?? 'Corr.').' — '.mb_strimwidth($c->getAsunto() ?? '', 0, 40, '…'),
                'start' => $start->format('Y-m-d'),
                'end'   => $end ? $end->format('Y-m-d') : null,
                'color' => '#9b2247',
                'url'   => $this->generateUrl('app_correspondence_show', ['id' => $c->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
                'extendedProps' => ['tipo' => 'Correspondencia', 'alerta' => $endAlerta],
            ];
        }

        // ── Circulares (verde) ────────────────────────────────
        foreach ($circularRepo->findForCalendar() as $ci) {
            $start = $ci->getFecha();
            $end   = $ci->getFechaLimite();
            if (!$start) continue;

            $endAlerta = $end && ((clone $end)->diff($now)->days <= 3 && $end >= $now);

            $events[] = [
                'id'    => 'ci-'.$ci->getId(),
                'title' => ($ci->getNumCircular() ?? 'Circular').' — '.mb_strimwidth($ci->getTitulo() ?? '', 0, 40, '…'),
                'start' => $start->format('Y-m-d'),
                'end'   => $end ? $end->format('Y-m-d') : null,
                'color' => '#1e5b4f',
                'url'   => $this->generateUrl('app_circular_show', ['id' => $ci->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
                'extendedProps' => ['tipo' => 'Circular', 'alerta' => $endAlerta],
            ];
        }

        // ── Expedientes CISAE (rojo) ──────────────────────────
        foreach ($cisaeRepo->findForCalendar() as $exp) {
            $start = $exp['fechaInicio'];
            $end   = $exp['fechaTermino'];
            if (!$start && !$end) continue;

            $events[] = [
                'id'    => 'cisae-'.$exp['id'],
                'title' => 'CISAE: '.mb_strimwidth($exp['titulo'] ?? '', 0, 50, '…'),
                'start' => $start ? $start->format('Y-m-d') : $end->format('Y-m-d'),
                'end'   => $end ? $end->format('Y-m-d') : null,
                'color' => '#dc3545',
                'url'   => $this->generateUrl('app_cisae_show', ['id' => $exp['id']], UrlGeneratorInterface::ABSOLUTE_URL),
                'extendedProps' => ['tipo' => 'CISAE'],
            ];
        }

        return new JsonResponse($events);
    }
}
