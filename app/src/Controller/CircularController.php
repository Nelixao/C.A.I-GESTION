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

    #[Route('/new', name: 'app_circular_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $circular = new Circular();
        $form = $this->createForm(CircularType::class, $circular);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
