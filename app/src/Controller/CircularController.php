<?php

namespace App\Controller;

use App\Entity\Circular;
use App\Form\CircularType;
use App\Repository\CircularRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/circular')]
final class CircularController extends AbstractController
{
    #[Route(name: 'app_circular_index', methods: ['GET'])]
    public function index(CircularRepository $circularRepository): Response
    {
        return $this->render('circular/index.html.twig', [
            'circulars' => $circularRepository->findAll(),
        ]);
    }

    #[Route('/export', name: 'app_circular_export', methods: ['GET'])]
    public function export(CircularRepository $circularRepository): Response
    {
        $items = $circularRepository->findAll();
        $headers = ['ID','Título','Contenido','Dirigido A','Fecha','Archivo','Creado por','Creado en','Actualizado en'];
        $f = fopen('php://temp', 'r+');
        fputcsv($f, $headers);
        foreach ($items as $c) {
            fputcsv($f, [
                $c->getId(),
                $c->getTitle(),
                $c->getContent(),
                $c->getTargetGroup(),
                $c->getDate()? $c->getDate()->format('Y-m-d') : '',
                $c->getFilePath(),
                $c->getCreatedBy(),
                $c->getCreatedAt()? $c->getCreatedAt()->format('Y-m-d H:i') : '',
                $c->getUpdatedAt()? $c->getUpdatedAt()->format('Y-m-d H:i') : '',
            ]);
        }
        rewind($f);
        $csv = "\xEF\xBB\xBF" . stream_get_contents($f);
        fclose($f);
        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="circulares.csv"'
        ]);
    }

    #[Route('/new', name: 'app_circular_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $circular = new Circular();
        $form = $this->createForm(CircularType::class, $circular);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Manejo del archivo
            $file = $form->get('file_path')->getData();
            if ($file) {
                $safe = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $new = $safe.'-'.uniqid().'.'.$file->guessExtension();
                $file->move($this->getParameter('app.upload_dir'), $new);
                $circular->setFilePath('uploads/'.$new);
            } else {
                if ($circular->getFilePath() === null) {
                    $circular->setFilePath('');
                }
            }

            $entityManager->persist($circular);
            $entityManager->flush();

            return $this->redirectToRoute('app_circular_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('circular/new.html.twig', [
            'circular' => $circular,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_circular_show', methods: ['GET'])]
    public function show(Circular $circular): Response
    {
        return $this->render('circular/show.html.twig', [
            'circular' => $circular,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_circular_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Circular $circular, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CircularType::class, $circular);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Manejo del archivo al editar
            $file = $form->get('file_path')->getData();
            if ($file) {
                $safe = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $new = $safe.'-'.uniqid().'.'.$file->guessExtension();
                $file->move($this->getParameter('app.upload_dir'), $new);
                $circular->setFilePath('uploads/'.$new);
            } else {
                if ($circular->getFilePath() === null) {
                    $circular->setFilePath('');
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_circular_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('circular/edit.html.twig', [
            'circular' => $circular,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_circular_delete', methods: ['POST'])]
    public function delete(Request $request, Circular $circular, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$circular->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($circular);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_circular_index', [], Response::HTTP_SEE_OTHER);
    }
}
