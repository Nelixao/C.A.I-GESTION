<?php

namespace App\Controller;

use App\Entity\NotaInformativa;
use App\Form\NotaInformativaType;
use App\Repository\NotaInformativaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/nota-informativa')]
final class NotaInformativaController extends AbstractController
{
    #[Route('/', name: 'app_nota_informativa_index', methods: ['GET'])]
    public function index(NotaInformativaRepository $repo): Response
    {
        return $this->render('nota_informativa/index.html.twig', [
            'notas' => $repo->findBy([], ['id' => 'DESC']),
        ]);
    }

    #[Route('/new', name: 'app_nota_informativa_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $nota = new NotaInformativa();
        $form = $this->createForm(NotaInformativaType::class, $nota);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTimeImmutable();
            $nota->setCreatedAt($now);
            $nota->setUpdatedAt($now);

            if ($this->getUser()) {
                $nota->setCreatedBy($this->getUser()?->getId());
                if ($nota->getUser() === null) {
                    $nota->setUser($this->getUser());
                }
            }

            $em->persist($nota);
            $em->flush();

            $this->addFlash('success', 'Nota informativa creada correctamente.');
            return $this->redirectToRoute('app_nota_informativa_index');
        }

        return $this->render('nota_informativa/new.html.twig', ['nota' => $nota, 'form' => $form]);
    }

    #[Route('/{id}', name: 'app_nota_informativa_show', methods: ['GET'])]
    public function show(NotaInformativa $nota): Response
    {
        return $this->render('nota_informativa/show.html.twig', ['nota' => $nota]);
    }

    #[Route('/{id}/edit', name: 'app_nota_informativa_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NotaInformativa $nota, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(NotaInformativaType::class, $nota);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nota->setUpdatedAt(new \DateTimeImmutable());
            $em->flush();

            $this->addFlash('success', 'Nota informativa actualizada.');
            return $this->redirectToRoute('app_nota_informativa_index');
        }

        return $this->render('nota_informativa/edit.html.twig', ['nota' => $nota, 'form' => $form]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_nota_informativa_delete', methods: ['POST'])]
    public function delete(Request $request, NotaInformativa $nota, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $nota->getId(), $token)) {
            $em->remove($nota);
            $em->flush();
            $this->addFlash('success', 'Nota informativa eliminada.');
        }
        return $this->redirectToRoute('app_nota_informativa_index', [], Response::HTTP_SEE_OTHER);
    }
}
