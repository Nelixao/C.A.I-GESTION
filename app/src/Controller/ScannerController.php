<?php

namespace App\Controller;

use App\Entity\Scanner;
use App\Entity\Oficio;
use App\Entity\Correspondence;
use App\Entity\Circular;
use App\Form\ScannerType;
use App\Repository\ScannerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// src/Controller/ScannerController.php
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/scanner')]
final class ScannerController extends AbstractController
{
    #[Route('/', name: 'app_scanner_index', methods: ['GET'])]
    public function index(ScannerRepository $scannerRepository): Response
    {
        return $this->render('scanner/index.html.twig', [
            'scanners' => $scannerRepository->findBy([], ['id' => 'DESC'])
        ]);
    }

    #[Route('/export', name: 'app_scanner_export', methods: ['GET'])]
    public function export(ScannerRepository $scannerRepository): Response
    {
        $items = $scannerRepository->findBy([], ['id' => 'DESC']);
        $headers = ['ID','Nombre','Origen','ID Origen','Archivo','MIME','Tamaño (bytes)','Estado','Creado'];
        $f = fopen('php://temp', 'r+');
        fputcsv($f, $headers);
        foreach ($items as $s) {
            fputcsv($f, [
                $s->getId(),
                $s->getName(),
                $s->getSourceType(),
                $s->getSourceId(),
                $s->getFilePath(),
                $s->getMimeType(),
                $s->getSize(),
                $s->getStatus(),
                $s->getCreatedAt()? $s->getCreatedAt()->format('Y-m-d H:i') : '',
            ]);
        }
        rewind($f);
        $csv = "\xEF\xBB\xBF" . stream_get_contents($f); // BOM UTF-8 para Excel
        fclose($f);
        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="scanner.csv"'
        ]);
    }

    #[Route('/new', name: 'app_scanner_new', methods: ['GET','POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
    ): Response {
        $scanner = new Scanner();
        $form = $this->createForm(ScannerType::class, $scanner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $file */
            $file = $form->get('upload')->getData();
            if (!$file) {
                $this->addFlash('danger', 'No se recibió el archivo.');
                return $this->redirectToRoute('app_scanner_new');
            }

            $uploadsDir = (string) $this->getParameter('app.scanner_upload_dir');
            if (!is_dir($uploadsDir) && !@mkdir($uploadsDir, 0775, true)) {
                throw new \RuntimeException('No se pudo crear el directorio de subidas: '.$uploadsDir);
            }

            // nombre de archivo seguro
            $origName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeName = $slugger->slug($origName)->lower();
            $ext = $file->guessExtension() ?: ($file->getClientOriginalExtension() ?: 'bin');
            $newFilename = sprintf('%s-%s.%s', $safeName ?: 'scan', uniqid(), $ext);

            try {
                $file->move($uploadsDir, $newFilename);
            } catch (FileException $e) {
                $this->addFlash('danger', 'Error guardando el archivo: '.$e->getMessage());
                return $this->redirectToRoute('app_scanner_new');
            }

            // Ruta relativa pública si está bajo /public
            $publicRoot = rtrim($this->getParameter('kernel.project_dir'), '/').'/public/';
            if (str_starts_with($uploadsDir, $publicRoot)) {
                $relative = ltrim(str_replace($publicRoot, '', $uploadsDir), '/').'/'.$newFilename; // "uploads/scanner/xxx.pdf"
            } else {
                // Subida fuera de public: guarda una ruta "lógica"
                $relative = 'uploads/scanner/'.$newFilename;
            }

            $scanner->setFilePath($relative);
            $scanner->setMimeType($file->getClientMimeType() ?: 'application/octet-stream');
            $scanner->setSize($file->getSize() ?: 0);
            $scanner->setStatus('finalizado');
            $now = new \DateTimeImmutable();
            $scanner->setCreatedAt($now);
            $scanner->setUpdatedAt($now);
            if (method_exists($scanner, 'setFechaSubida')) {
                $scanner->setFechaSubida($now);
            }

            // Mapear num_documento si viene el sourceId
            if ($scanner->getSourceId()) {
                $scanner->setNumDocumento((string)$scanner->getSourceId());
            }

            // Tipo de documento legible
            $map = ['oficio' => 'Oficio', 'correspondence' => 'Correspondencia', 'circular' => 'Circular'];
            $scanner->setTipoDocumento($map[strtolower((string)$scanner->getSourceType())] ?? null);

            // Actualizar entidad origen (si existe)
            if ($scanner->getSourceType() && $scanner->getSourceId()) {
                $this->finalizeSource($em, (string)$scanner->getSourceType(), (int)$scanner->getSourceId());
            }

            $em->persist($scanner);
            $em->flush();

            $this->addFlash('success', 'Documento escaneado subido y vinculado correctamente.');
            return $this->redirectToRoute('app_scanner_index');
        }

        return $this->render('scanner/new.html.twig', [
            'scanner' => $scanner,
            'form' => $form,
        ]);
    }

    private function finalizeSource(EntityManagerInterface $em, string $type, int $id): void
    {
        $type = strtolower($type);
        $now = new \DateTimeImmutable();

        $entity = match ($type) {
            'oficio'         => $em->getRepository(Oficio::class)->find($id),
            'correspondence' => $em->getRepository(Correspondence::class)->find($id),
            'circular'       => $em->getRepository(\App\Entity\Circular::class)->find($id),
            default          => null,
        };

        if (!$entity) {
            return;
        }

        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt($now);
        }
        if (method_exists($entity, 'setStatus')) {
            $entity->setStatus('terminado');
        }
        // Si quieres, también podrías setear aquí un campo "hasScan = true", etc.
    }
}
