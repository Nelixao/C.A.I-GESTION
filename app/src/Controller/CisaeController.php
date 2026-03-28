<?php

namespace App\Controller;

use App\Entity\Cisae;
use App\Form\CisaeType;
use App\Repository\CisaeRepository;
use App\Repository\OficioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cisae')]
#[IsGranted('ROLE_USER')]
final class CisaeController extends AbstractController
{
    #[Route('/', name: 'app_cisae_index', methods: ['GET'])]
    public function index(CisaeRepository $cisaeRepo): Response
    {
        return $this->render('cisae/index.html.twig', [
            'cisaes' => $cisaeRepo->findByUrgencia(),
        ]);
    }

    #[Route('/new', name: 'app_cisae_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $cisae = new Cisae();
        $form  = $this->createForm(CisaeType::class, $cisae);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($cisae);
            $em->flush();
            $this->addFlash('success', 'Expediente CISAE creado correctamente.');
            return $this->redirectToRoute('app_cisae_index');
        }

        return $this->render('cisae/new.html.twig', [
            'cisae' => $cisae,
            'form'  => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cisae_show', methods: ['GET'])]
    public function show(Cisae $cisae, OficioRepository $oficioRepo): Response
    {
        return $this->render('cisae/show.html.twig', [
            'cisae'  => $cisae,
            'oficios' => $cisae->getOficios()->toArray(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cisae_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Cisae $cisae, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CisaeType::class, $cisae);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Expediente actualizado.');
            return $this->redirectToRoute('app_cisae_show', ['id' => $cisae->getId()]);
        }

        return $this->render('cisae/edit.html.twig', [
            'cisae' => $cisae,
            'form'  => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cisae_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Cisae $cisae, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cisae->getId(), $request->request->get('_token'))) {
            $em->remove($cisae);
            $em->flush();
            $this->addFlash('success', 'Expediente eliminado.');
        }
        return $this->redirectToRoute('app_cisae_index');
    }
}
