<?php

namespace App\Controller;

use App\Entity\Correspondence;
use App\Form\CorrespondenceType;
use App\Repository\CorrespondenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/correspondence')]
final class CorrespondenceController extends AbstractController
{
    #[Route(name: 'app_correspondence_index', methods: ['GET'])]
    public function index(CorrespondenceRepository $correspondenceRepository): Response
    {
        return $this->render('correspondence/index.html.twig', [
            'correspondences' => $correspondenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_correspondence_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $correspondence = new Correspondence();
        $form = $this->createForm(CorrespondenceType::class, $correspondence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($correspondence);
            $entityManager->flush();

            return $this->redirectToRoute('app_correspondence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('correspondence/new.html.twig', [
            'correspondence' => $correspondence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_correspondence_show', methods: ['GET'])]
    public function show(Correspondence $correspondence): Response
    {
        return $this->render('correspondence/show.html.twig', [
            'correspondence' => $correspondence,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_correspondence_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Correspondence $correspondence, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CorrespondenceType::class, $correspondence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_correspondence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('correspondence/edit.html.twig', [
            'correspondence' => $correspondence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_correspondence_delete', methods: ['POST'])]
    public function delete(Request $request, Correspondence $correspondence, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$correspondence->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($correspondence);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_correspondence_index', [], Response::HTTP_SEE_OTHER);
    }
}
