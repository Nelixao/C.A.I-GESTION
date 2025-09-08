<?php

namespace App\Entity;

use App\Repository\OficioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OficioRepository::class)]
class Oficio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 46)]
    private ?string $title = null;

    #[ORM\Column(length: 67)]
    private ?string $content = null;

    #[ORM\Column(length: 45)]
    private ?string $sender = null;

    #[ORM\Column(length: 56)]
    private ?string $recipient = null;

    #[ORM\Column]
    private ?\DateTime $date = null;

    #[ORM\Column(length: 45)]
    private ?string $file_path = null;

    #[ORM\Column]
    private ?int $created_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\ManyToOne(inversedBy: 'oficio_id')]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Correspondence::class, inversedBy: 'oficios')]
    #[ORM\JoinColumn(name: 'id_correspondencia', referencedColumnName: 'id', nullable: true)]
    private ?Correspondence $correspondence = null;

    #[ORM\OneToOne]
    #[ORM\JoinColumn(name: 'id_escaneo', referencedColumnName: 'id', nullable: true)]
    private ?Scanner $scanner = null;

    #[ORM\Column(length: 20, options: ['default' => 'Pendiente'])]
    private ?string $status = 'Pendiente'; // valores: Pendiente, En trámite, Concluido, Archivado

    // Nuevos campos solicitados por el esquema
    #[ORM\Column(length: 20, unique: true, nullable: true)]
    private ?string $num_oficio = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $fecha_emision = null;

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

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): static
    {
        $this->recipient = $recipient;

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

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
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

    public function getCorrespondence(): ?Correspondence { return $this->correspondence; }
    public function setCorrespondence(?Correspondence $correspondence): static { $this->correspondence = $correspondence; return $this; }

    public function getScanner(): ?Scanner { return $this->scanner; }
    public function setScanner(?Scanner $scanner): static { $this->scanner = $scanner; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getNumOficio(): ?string { return $this->num_oficio; }
    public function setNumOficio(?string $n): static { $this->num_oficio = $n; return $this; }

    public function getFechaEmision(): ?\DateTimeInterface { return $this->fecha_emision; }
    public function setFechaEmision(?\DateTimeInterface $f): static { $this->fecha_emision = $f; return $this; }

    public function getFechaRegistro(): ?\DateTimeImmutable { return $this->fecha_registro; }
    public function setFechaRegistro(?\DateTimeImmutable $f): static { $this->fecha_registro = $f; return $this; }
}
