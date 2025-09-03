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
        $csv = "\xEF\xBB\xBF" . stream_get_contents($f);
        fclose($f);
        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="scanner.csv"'
        ]);
    }

    #[Route('/new', name: 'app_scanner_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $scanner = new Scanner();
        $form = $this->createForm(ScannerType::class, $scanner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('upload')->getData();
            // Prefer project public/uploads/scanner
            $uploadsDir = rtrim($this->getParameter('kernel.project_dir'), '/').'/public/uploads/scanner';
            if (!is_dir($uploadsDir)) {
                @mkdir($uploadsDir, 0775, true);
            }
            if (!is_writable($uploadsDir)) {
                @chmod($uploadsDir, 0775);
            }
            if (!is_writable($uploadsDir)) {
                // As a fallback, try app/var/uploads/scanner (will not be web-accessible unless proxied)
                $fallback = rtrim($this->getParameter('kernel.project_dir'), '/').'/var/uploads/scanner';
                if (!is_dir($fallback)) { @mkdir($fallback, 0775, true); }
                if (is_writable($fallback)) {
                    $uploadsDir = $fallback;
                } else {
                    throw new \RuntimeException('No se puede escribir en la carpeta de subidas: '.$uploadsDir.' ni en el fallback. Verifique permisos (www-data) y ownership.');
                }
            }
            $ext = $file->guessExtension() ?: 'bin';
            $filename = uniqid('scan_') . '.' . $ext;
            $file->move($uploadsDir, $filename);

            // Build public-relative path only if uploaded under public
            if (str_contains($uploadsDir, '/public/uploads/scanner')) {
                $relative = 'uploads/scanner/' . $filename;
            } else {
                // stored in var/uploads; still keep a record path
                $relative = 'var/uploads/scanner/' . $filename;
            }
            $scanner->setFilePath($relative);
            $scanner->setMimeType($file->getClientMimeType());
            $scanner->setSize($file->getSize());
            $scanner->setStatus('finalizado');
            $scanner->setCreatedAt(new \DateTimeImmutable());
            $scanner->setUpdatedAt(new \DateTimeImmutable());

            // Finalizar entidad origen
            $sourceType = $scanner->getSourceType();
            $sourceId = $scanner->getSourceId();
            if ($sourceType && $sourceId) {
                $this->finalizeSource($em, $sourceType, (int)$sourceId);
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
        if ($type === 'oficio') {
            $entity = $em->getRepository(Oficio::class)->find($id);
            if ($entity) {
                if (method_exists($entity, 'setUpdatedAt')) {
                    $entity->setUpdatedAt(new \DateTimeImmutable());
                }
                if (method_exists($entity, 'setStatus')) {
                    $entity->setStatus('terminado');
                }
            }
        } elseif ($type === 'correspondence') {
            $entity = $em->getRepository(Correspondence::class)->find($id);
            if ($entity) {
                if (method_exists($entity, 'setUpdatedAt')) {
                    $entity->setUpdatedAt(new \DateTime());
                }
                if (method_exists($entity, 'setStatus')) {
                    $entity->setStatus('terminado');
                }
            }
        } elseif ($type === 'circular') {
            $entity = $em->getRepository(Circular::class)->find($id);
            if ($entity) {
                if (method_exists($entity, 'setUpdatedAt')) {
                    $entity->setUpdatedAt(new \DateTime());
                }
                if (method_exists($entity, 'setStatus')) {
                    $entity->setStatus('terminado');
                }
            }
        }
        // Si la entidad fuente tiene campo "status", lo pasamos a 'terminado'.
    }
}
