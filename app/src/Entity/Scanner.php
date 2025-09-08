<?php

namespace App\Entity;

use App\Repository\ScannerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScannerRepository::class)]
class Scanner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    // origen del documento: oficio, correspondence, circular, otro
    #[ORM\Column(length: 20)]
    private ?string $source_type = null;

    // ENUM tipo_documento('Correspondencia','Oficio','Circular')
    #[ORM\Column(length: 20, nullable: true)]
    private ?string $tipo_documento = null;

    // id del registro origen (nullable en caso de 'otro')
    #[ORM\Column(nullable: true)]
    private ?int $source_id = null;

    #[ORM\Column(length: 255)]
    private ?string $file_path = null;

    // Campos solicitados para Escaneos
    #[ORM\Column(length: 20, nullable: true)]
    private ?string $num_documento = null; // Número del documento (control/oficio/circular)

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $url_archivo = null; // Alias de file_path público

    #[ORM\Column(options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $fecha_subida = null;

    #[ORM\Column(length: 120, nullable: true)]
    private ?string $mime_type = null;

    #[ORM\Column(nullable: true)]
    private ?int $size = null;

    #[ORM\Column(length: 20)]
    private ?string $status = 'finalizado';

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\ManyToOne(inversedBy: 'scanners')]
    #[ORM\JoinColumn(name: 'usuario_subio', referencedColumnName: 'id', nullable: true)]
    private ?User $user = null;

    public function getId(): ?int { return $this->id; }

    public function getName(): ?string { return $this->name; }
    public function setName(string $name): static { $this->name = $name; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): static { $this->description = $description; return $this; }

    public function getSourceType(): ?string { return $this->source_type; }
    public function setSourceType(string $source_type): static { $this->source_type = $source_type; return $this; }

    public function getSourceId(): ?int { return $this->source_id; }
    public function setSourceId(?int $source_id): static { $this->source_id = $source_id; return $this; }

    public function getFilePath(): ?string { return $this->file_path; }
    public function setFilePath(string $file_path): static { $this->file_path = $file_path; $this->url_archivo = $file_path; return $this; }

    public function getMimeType(): ?string { return $this->mime_type; }
    public function setMimeType(?string $mime_type): static { $this->mime_type = $mime_type; return $this; }

    public function getSize(): ?int { return $this->size; }
    public function setSize(?int $size): static { $this->size = $size; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->created_at; }
    public function setCreatedAt(\DateTimeImmutable $created_at): static { $this->created_at = $created_at; return $this; }

    public function getTipoDocumento(): ?string { return $this->tipo_documento; }
    public function setTipoDocumento(?string $t): static { $this->tipo_documento = $t; return $this; }

    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updated_at; }
    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static { $this->updated_at = $updated_at; return $this; }

    public function getNumDocumento(): ?string { return $this->num_documento; }
    public function setNumDocumento(?string $n): static { $this->num_documento = $n; return $this; }

    public function getUrlArchivo(): ?string { return $this->url_archivo; }
    public function setUrlArchivo(?string $u): static { $this->url_archivo = $u; return $this; }

    public function getFechaSubida(): ?\DateTimeImmutable { return $this->fecha_subida; }
    public function setFechaSubida(?\DateTimeImmutable $f): static { $this->fecha_subida = $f; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }
}
