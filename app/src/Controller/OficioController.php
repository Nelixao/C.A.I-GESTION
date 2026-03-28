<?php

namespace App\Controller;

use App\Entity\Oficio;
use App\Form\OficioType;
use App\Repository\OficioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PathNormalizer;

#[Route('/oficio')]
final class OficioController extends AbstractController
{
    #[Route(name: 'app_oficio_index', methods: ['GET'])]
    public function index(OficioRepository $oficioRepository): Response
    {
        return $this->render('oficio/index.html.twig', [
            'oficios' => $oficioRepository->findBy([], ['updated_at' => 'DESC', 'id' => 'DESC']),
        ]);
    }

    #[Route('/template', name: 'app_oficio_template', methods: ['GET'])]
    public function template(): Response
    {
        $headers = ['title','content','sender','recipient','date(YYYY-MM-DD HH:MM)'];

        $response = new StreamedResponse(function () use ($headers) {
            $out = fopen('php://output', 'w');
            // BOM para Excel/UTF-8
            echo "\xEF\xBB\xBF";
            fputcsv($out, $headers);
            // Fila de ejemplo
            fputcsv($out, ['Oficio ejemplo','Contenido de ejemplo','Juan Pérez','Dirección General','2025-10-07 10:30']);
            fclose($out);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="plantilla_oficios.csv"');

        return $response;
    }

    #[Route('/import', name: 'app_oficio_import', methods: ['GET','POST'])]
    public function import(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $file = $request->files->get('csv_file');
            if (!$file) {
                $this->addFlash('danger', 'Selecciona un archivo CSV.');
                return $this->redirectToRoute('app_oficio_import');
            }

            $path = $file->getPathname();
            if (!is_readable($path)) {
                $this->addFlash('danger', 'No se pudo leer el archivo.');
                return $this->redirectToRoute('app_oficio_import');
            }

            $handle = fopen($path, 'r');
            if ($handle === false) {
                $this->addFlash('danger', 'No se pudo abrir el archivo.');
                return $this->redirectToRoute('app_oficio_import');
            }

            // Leer encabezados (saltando BOM)
            $first = fgets($handle);
            if ($first === false) {
                fclose($handle);
                $this->addFlash('danger', 'El archivo está vacío.');
                return $this->redirectToRoute('app_oficio_import');
            }
            $first = preg_replace('/^\xEF\xBB\xBF/', '', $first);
            $cols = str_getcsv($first);
            if (count($cols) < 4) {
                fclose($handle);
                $this->addFlash('danger', 'Encabezados inválidos.');
                return $this->redirectToRoute('app_oficio_import');
            }

            $count = 0; $errors = 0;
            while (($data = fgetcsv($handle)) !== false) {
                if (count(array_filter($data, fn($v)=> $v!==null && $v!=='')) === 0) {
                    continue; // línea vacía
                }
                [$title,$content,$sender,$recipient,$dateStr] = array_pad($data, 5, null);
                if (!$title || !$content) { $errors++; continue; }

                $oficio = new Oficio();
                $oficio->setTitle((string)$title);
                $oficio->setContent((string)$content);
                $oficio->setSender((string)($sender ?? ''));
                $oficio->setRecipient((string)($recipient ?? ''));

                if ($dateStr) {
                    $dt = \DateTime::createFromFormat('Y-m-d H:i', $dateStr)
                        ?: \DateTime::createFromFormat('Y-m-d', $dateStr);
                    if ($dt) { $oficio->setDate($dt); }
                }

                $oficio->setCreatedAt(new \DateTimeImmutable());
                $oficio->setUpdatedAt(new \DateTimeImmutable());

                if ($this->getUser()) {
                    $oficio->setCreatedBy($this->getUser()?->getId() ?? 0);
                    $oficio->setUser($this->getUser());
                } else {
                    $oficio->setCreatedBy(0);
                }

                try {
                    $em->persist($oficio);
                    $count++;
                } catch (\Throwable $e) {
                    $errors++;
                }
            }
            fclose($handle);
            $em->flush();

            $this->addFlash('success', "Importación completada: {$count} registros, {$errors} errores.");
            return $this->redirectToRoute('app_oficio_index');
        }

        return $this->render('oficio/import.html.twig');
    }

    #[Route('/export', name: 'app_oficio_export', methods: ['GET'])]
    public function export(OficioRepository $oficioRepository): Response
    {
        $headers = [
            'ID','Título','Contenido','Remitente','Destinatario','Fecha','Archivo','Creado por','Creado el','Actualizado el'
        ];
        $oficios = $oficioRepository->findBy([], ['updated_at' => 'DESC', 'id' => 'DESC']);

        $response = new StreamedResponse(function () use ($headers, $oficios) {
            $out = fopen('php://output', 'w');
            echo "\xEF\xBB\xBF"; // BOM
            fputcsv($out, $headers);

            foreach ($oficios as $o) {
                fputcsv($out, [
                    $o->getId(),
                    $o->getTitle(),
                    $o->getContent(),
                    $o->getSender(),
                    $o->getRecipient(),
                    $o->getDate()? $o->getDate()->format('Y-m-d H:i') : '',
                    $o->getFilePath(),
                    $o->getCreatedBy(),
                    $o->getCreatedAt()? $o->getCreatedAt()->format('Y-m-d H:i') : '',
                    $o->getUpdatedAt()? $o->getUpdatedAt()->format('Y-m-d H:i') : '',
                ]);
            }
            fclose($out);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="oficios.csv"');

        return $response;
    }

    #[Route('/new', name: 'app_oficio_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, PathNormalizer $normalizer): Response
    {
        $oficio = new Oficio();
        $oficio->setCreatedAt(new \DateTimeImmutable());
        $oficio->setUpdatedAt(new \DateTimeImmutable());

        if ($this->getUser()) {
            $oficio->setCreatedBy($this->getUser()?->getId() ?? 0);
            $oficio->setUser($this->getUser());
        } else {
            $oficio->setCreatedBy(0);
        }

        $form = $this->createForm(OficioType::class, $oficio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Manejo del archivo (campo mapped=false en el form)
            $file = $form->get('file_path')->getData();
            if ($file) {
                $safe = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $new = $safe.'-'.uniqid().'.'.$file->guessExtension();

                // Directorio de subida
                $targetDir = $this->getParameter('app.upload_dir') ?? ($this->getParameter('kernel.project_dir').'/public/uploads');
                if (!is_dir($targetDir)) {
                    @mkdir($targetDir, 0775, true);
                }

                $file->move($targetDir, $new);

                $rel = 'uploads/'.$new;
                $rel = $normalizer->normalize($rel);

                $oficio->setStorageDir('uploads');
                $oficio->setFileName($new);
                $oficio->setFilePath($rel);
            } else {
                if ($oficio->getFilePath() === null) {
                    $oficio->setFilePath('');
                }
            }

            $em->persist($oficio);
            $em->flush();

            return $this->redirectToRoute('app_oficio_index');
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
    public function edit(Request $request, Oficio $oficio, EntityManagerInterface $em, PathNormalizer $normalizer): Response
    {
        $form = $this->createForm(OficioType::class, $oficio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('file_path')->getData();
            if ($file) {
                $safe = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $new = $safe.'-'.uniqid().'.'.$file->guessExtension();

                $targetDir = $this->getParameter('app.upload_dir') ?? ($this->getParameter('kernel.project_dir').'/public/uploads');
                if (!is_dir($targetDir)) {
                    @mkdir($targetDir, 0775, true);
                }

                $file->move($targetDir, $new);

                $rel = 'uploads/'.$new;
                $rel = $normalizer->normalize($rel);

                $oficio->setStorageDir('uploads');
                $oficio->setFileName($new);
                $oficio->setFilePath($rel);
            } else {
                if ($oficio->getFilePath() === null) {
                    $oficio->setFilePath('');
                }
            }

            $oficio->setUpdatedAt(new \DateTimeImmutable());
            $em->flush();

            return $this->redirectToRoute('app_oficio_index');
        }

        return $this->render('oficio/edit.html.twig', [
            'oficio' => $oficio,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_oficio_delete', methods: ['POST'])]
    public function delete(Request $request, Oficio $oficio, EntityManagerInterface $entityManager): Response
    {
        $token = $request->request->get('_token'); // más compatible que getPayload()
        if ($this->isCsrfTokenValid('delete'.$oficio->getId(), $token)) {
            $entityManager->remove($oficio);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_oficio_index', [], Response::HTTP_SEE_OTHER);
    }
}
