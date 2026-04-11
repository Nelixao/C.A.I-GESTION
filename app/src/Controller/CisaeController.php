<?php

namespace App\Controller;

use App\Entity\Cisae;
use App\Form\CisaeType;
use App\Repository\CisaeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cisae')]
final class CisaeController extends AbstractController
{
    #[Route('/', name: 'app_cisae_index', methods: ['GET'])]
    public function index(CisaeRepository $repo): Response
    {
        $items = $repo->findBy([], ['fechaLimite' => 'ASC']);
        $today = new \DateTime();
        $cisaeData = [];

        foreach ($items as $cisae) {
            $fechaLimite = $cisae->getFechaLimite();
            if ($fechaLimite) {
                $diff = $today->diff($fechaLimite);
                $dias = (int) $diff->days;
                if ($today > $fechaLimite) {
                    $dias = -$dias;
                }
            } else {
                $dias = null;
            }
            $cisaeData[] = ['cisae' => $cisae, 'diasRestantes' => $dias];
        }

        return $this->render('cisae/index.html.twig', ['cisaeData' => $cisaeData]);
    }

    #[Route('/new', name: 'app_cisae_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, CisaeRepository $repo): Response
    {
        $cisae = new Cisae();

        // Folio automático consecutivo
        $nextNum = $repo->count([]) + 1;
        $cisae->setFolio(str_pad((string) $nextNum, 3, '0', STR_PAD_LEFT));

        $form = $this->createForm(CisaeType::class, $cisae);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTimeImmutable();
            $cisae->setCreatedAt($now);
            $cisae->setUpdatedAt($now);
            $cisae->setCreatedBy($this->getUser()?->getId() ?? 0);

            $em->persist($cisae);
            $em->flush();

            $this->addFlash('success', 'Trámite CISAE creado correctamente.');
            return $this->redirectToRoute('app_cisae_index');
        }

        return $this->render('cisae/new.html.twig', ['cisae' => $cisae, 'form' => $form]);
    }

    #[Route('/{id}', name: 'app_cisae_show', methods: ['GET'])]
    public function show(Cisae $cisae): Response
    {
        $today = new \DateTime();
        $fechaLimite = $cisae->getFechaLimite();
        $diasRestantes = null;

        if ($fechaLimite) {
            $diff = $today->diff($fechaLimite);
            $dias = (int) $diff->days;
            $diasRestantes = $today > $fechaLimite ? -$dias : $dias;
        }

        return $this->render('cisae/show.html.twig', [
            'cisae' => $cisae,
            'diasRestantes' => $diasRestantes,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cisae_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cisae $cisae, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CisaeType::class, $cisae);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cisae->setUpdatedAt(new \DateTimeImmutable());
            $em->flush();

            $this->addFlash('success', 'Trámite CISAE actualizado.');
            return $this->redirectToRoute('app_cisae_index');
        }

        return $this->render('cisae/edit.html.twig', ['cisae' => $cisae, 'form' => $form]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_cisae_delete', methods: ['POST'])]
    public function delete(Request $request, Cisae $cisae, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cisae->getId(), $request->request->get('_token'))) {
            $em->remove($cisae);
            $em->flush();
            $this->addFlash('success', 'Trámite CISAE eliminado.');
        }
        return $this->redirectToRoute('app_cisae_index', [], Response::HTTP_SEE_OTHER);
    }
}
