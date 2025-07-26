<?php

namespace App\Controller;

use App\Entity\Oficio;
use App\Form\OficioType;
use App\Repository\OficioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/oficio')]
final class OficioController extends AbstractController
{
    #[Route(name: 'app_oficio_index', methods: ['GET'])]
    public function index(OficioRepository $oficioRepository): Response
    {
        return $this->render('oficio/index.html.twig', [
            'oficios' => $oficioRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_oficio_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $oficio = new Oficio();
        $form = $this->createForm(OficioType::class, $oficio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($oficio);
            $entityManager->flush();

            return $this->redirectToRoute('app_oficio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('oficio/new.html.twig', [
            'oficio' => $oficio,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_oficio_show', methods: ['GET'])]
    public function show(Oficio $oficio): Response
    {
        return $this->render('oficio/show.html.twig', [
            'oficio' => $oficio,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_oficio_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Oficio $oficio, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OficioType::class, $oficio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_oficio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('oficio/edit.html.twig', [
            'oficio' => $oficio,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_oficio_delete', methods: ['POST'])]
    public function delete(Request $request, Oficio $oficio, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$oficio->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($oficio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_oficio_index', [], Response::HTTP_SEE_OTHER);
    }
}
