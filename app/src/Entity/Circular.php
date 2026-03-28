<?php

namespace App\Entity;

use App\Repository\CircularRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CircularRepository::class)]
class Circular
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 48)]
    private ?string $title = null;

    #[ORM\Column(length: 45)]
    private ?string $content = null;

    #[ORM\Column(length: 78)]
    private ?string $target_group = null;

    #[ORM\Column]
    private ?\DateTime $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file_path = null;

    #[ORM\Column]
    private ?int $created_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;


 #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "circulares")]
#[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", nullable: true, onDelete: "SET NULL")]
private ?User $user = null;


    #[ORM\OneToOne]
    #[ORM\JoinColumn(name: 'id_escaneo', referencedColumnName: 'id', nullable: true)]
    private ?Scanner $scanner = null;

    #[ORM\Column(length: 20, options: ['default' => 'Pendiente'])]
    private ?string $status = 'Pendiente'; // valores: Pendiente, En trámite, Concluido, Archivado

    // Nuevos campos solicitados por el esquema
    #[ORM\Column(length: 20, unique: true, nullable: true)]
    private ?string $num_circular = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $fecha_emision = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $remitente = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $destinatarios = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $asunto = null;

    #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $fecha_registro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getTargetGroup(): ?string
    {
        return $this->target_group;
    }

    public function setTargetGroup(string $target_group): static
    {
        $this->target_group = $target_group;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->file_path;
    }

    public function setFilePath(string $file_path): static
    {
        $this->file_path = $file_path;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        return $this->created_by;
    }

    public function setCreatedBy(int $created_by): static
    {
        $this->created_by = $created_by;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getScanner(): ?Scanner { return $this->scanner; }
    public function setScanner(?Scanner $scanner): static { $this->scanner = $scanner; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getNumCircular(): ?string { return $this->num_circular; }
    public function setNumCircular(?string $n): static { $this->num_circular = $n; return $this; }

    public function getFechaEmision(): ?\DateTimeInterface { return $this->fecha_emision; }
    public function setFechaEmision(?\DateTimeInterface $f): static { $this->fecha_emision = $f; return $this; }

    public function getRemitente(): ?string { return $this->remitente; }
    public function setRemitente(?string $r): static { $this->remitente = $r; return $this; }

    public function getDestinatarios(): ?string { return $this->destinatarios; }
    public function setDestinatarios(?string $d): static { $this->destinatarios = $d; return $this; }

    public function getAsunto(): ?string { return $this->asunto; }
    public function setAsunto(?string $a): static { $this->asunto = $a; return $this; }

    public function getFechaRegistro(): ?\DateTimeImmutable { return $this->fecha_registro; }
    public function setFechaRegistro(?\DateTimeImmutable $f): static { $this->fecha_registro = $f; return $this; }
}
