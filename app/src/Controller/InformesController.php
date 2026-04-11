<?php

namespace App\Controller;

use App\Repository\CisaeRepository;
use App\Repository\CircularRepository;
use App\Repository\CorrespondenceRepository;
use App\Repository\NotaInformativaRepository;
use App\Repository\OficioRepository;
use App\Repository\ScannerRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/informes')]
#[IsGranted('ROLE_ADMIN')]
final class InformesController extends AbstractController
{
    public function __construct(
        private readonly OficioRepository          $oficioRepo,
        private readonly CorrespondenceRepository  $corrRepo,
        private readonly CircularRepository        $circularRepo,
        private readonly CisaeRepository           $cisaeRepo,
        private readonly NotaInformativaRepository $notaRepo,
        private readonly ScannerRepository         $scannerRepo,
    ) {}

    #[Route('', name: 'app_informes', methods: ['GET'])]
    public function index(): Response
    {
        $data = $this->buildReportData();
        return $this->render('informes/index.html.twig', $data);
    }

    // ── Export endpoints ──────────────────────────────────────────

    #[Route('/export/modulos', name: 'app_informes_export_modulos', methods: ['GET'])]
    public function exportModulos(): StreamedResponse
    {
        $data = $this->buildReportData();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Total por Módulo');

        $this->writeHeader($sheet, ['Módulo', 'Total documentos'], 'A1:B1');
        $row = 2;
        foreach ($data['totalesPorModulo'] as $modulo => $total) {
            $sheet->setCellValue("A$row", $modulo);
            $sheet->setCellValue("B$row", $total);
            $row++;
        }
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);

        return $this->streamXlsx($spreadsheet, 'informe_modulos_' . date('Ymd') . '.xlsx');
    }

    #[Route('/export/estados', name: 'app_informes_export_estados', methods: ['GET'])]
    public function exportEstados(): StreamedResponse
    {
        $data = $this->buildReportData();
        $spreadsheet = new Spreadsheet();
        $sheetIndex  = 0;

        foreach ($data['estadosPorModulo'] as $modulo => $rows) {
            if ($sheetIndex === 0) {
                $sheet = $spreadsheet->getActiveSheet();
                $sheet->setTitle(mb_strimwidth($modulo, 0, 31));
            } else {
                $sheet = $spreadsheet->createSheet($sheetIndex);
                $sheet->setTitle(mb_strimwidth($modulo, 0, 31));
            }
            $this->writeHeader($sheet, ['Estado', 'Total'], 'A1:B1');
            $row = 2;
            foreach ($rows as $estado => $total) {
                $sheet->setCellValue("A$row", $estado);
                $sheet->setCellValue("B$row", $total);
                $row++;
            }
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheetIndex++;
        }

        return $this->streamXlsx($spreadsheet, 'informe_estados_' . date('Ymd') . '.xlsx');
    }

    #[Route('/export/areas', name: 'app_informes_export_areas', methods: ['GET'])]
    public function exportAreas(): StreamedResponse
    {
        $data = $this->buildReportData();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Documentos por Área');

        $this->writeHeader($sheet, ['Módulo', 'Área / Remitente', 'Total'], 'A1:C1');
        $row = 2;
        foreach ($data['areasPorModulo'] as $modulo => $areas) {
            foreach ($areas as $ar) {
                $sheet->setCellValue("A$row", $modulo);
                $sheet->setCellValue("B$row", $ar['area'] ?? '—');
                $sheet->setCellValue("C$row", (int) $ar['total']);
                $row++;
            }
        }
        foreach (['A', 'B', 'C'] as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        return $this->streamXlsx($spreadsheet, 'informe_areas_' . date('Ymd') . '.xlsx');
    }

    // ── Helpers ───────────────────────────────────────────────────

    private function buildReportData(): array
    {
        $totalesPorModulo = [
            'Oficios'          => $this->oficioRepo->countAll(),
            'Correspondencia'  => $this->corrRepo->count([]),
            'Circulares'       => $this->circularRepo->count([]),
            'CISAE'            => $this->cisaeRepo->count([]),
            'Notas informativas' => $this->notaRepo->count([]),
            'Escáner'          => $this->scannerRepo->count([]),
        ];

        $estadosPorModulo = [
            'Oficios'         => $this->rowsToAssoc($this->oficioRepo->countByStatus()),
            'Correspondencia' => $this->rowsToAssoc($this->corrRepo->countByStatus()),
            'Circulares'      => $this->rowsToAssoc($this->circularRepo->countByStatus()),
            'CISAE'           => $this->rowsToAssoc($this->cisaeRepo->countByStatus()),
            'Notas'           => $this->rowsToAssoc($this->notaRepo->countByStatus()),
            'Escáner'         => $this->rowsToAssoc($this->scannerRepo->countByStatus()),
        ];

        $areasPorModulo = [
            'Oficios'        => $this->oficioRepo->countBySender(),
            'Correspondencia'=> $this->corrRepo->countBySender(),
            'Circulares'     => $this->circularRepo->countByTargetGroup(),
            'CISAE'          => $this->cisaeRepo->countByArea(),
            'Notas'          => $this->notaRepo->countByArea(),
        ];

        // Flatten statuses para gráfica de dona global
        $globalStatuses = [];
        foreach ($estadosPorModulo as $rows) {
            foreach ($rows as $estado => $total) {
                $globalStatuses[$estado] = ($globalStatuses[$estado] ?? 0) + $total;
            }
        }
        arsort($globalStatuses);

        $totalesPorModuloValues = array_values($totalesPorModulo);
        $globalStatusesValues   = array_values($globalStatuses);

        return compact('totalesPorModulo', 'totalesPorModuloValues', 'estadosPorModulo', 'areasPorModulo', 'globalStatuses', 'globalStatusesValues');
    }

    private function rowsToAssoc(array $rows): array
    {
        $result = [];
        foreach ($rows as $r) {
            $result[$r['estado'] ?? 'Sin estado'] = (int) $r['total'];
        }
        return $result;
    }

    private function writeHeader(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet, array $headers, string $range): void
    {
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue("{$col}1", $header);
            $col++;
        }
        $sheet->getStyle($range)->applyFromArray([
            'font'      => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
            'fill'      => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '9B2247']],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ]);
    }

    private function streamXlsx(Spreadsheet $spreadsheet, string $filename): StreamedResponse
    {
        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', "attachment; filename=\"$filename\"");
        $response->headers->set('Cache-Control', 'max-age=0');
        return $response;
    }
}
