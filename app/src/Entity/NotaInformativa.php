<?php

namespace App\Entity;

use App\Repository\NotaInformativaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotaInformativaRepository::class)]
class NotaInformativa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, unique: true, nullable: true)]
    private ?string $folio = null;

    #[ORM\Column(length: 120)]
    private ?string $title = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $area = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $date = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime $fechaLimite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file_path = null;

    #[ORM\Column(nullable: true)]
    private ?int $created_by = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(length: 20)]
    private ?string $status = 'no-revisado';

    public function getId(): ?int { return $this->id; }

    public function getFolio(): ?string { return $this->folio; }
    public function setFolio(?string $folio): static { $this->folio = $folio; return $this; }

    public function getTitle(): ?string { return $this->title; }
    public function setTitle(string $title): static { $this->title = $title; return $this; }

    public function getContent(): ?string { return $this->content; }
    public function setContent(?string $content): static { $this->content = $content; return $this; }

    public function getArea(): ?string { return $this->area; }
    public function setArea(?string $area): static { $this->area = $area; return $this; }

    public function getDate(): ?\DateTime { return $this->date; }
    public function setDate(?\DateTime $date): static { $this->date = $date; return $this; }

    public function getFechaLimite(): ?\DateTime { return $this->fechaLimite; }
    public function setFechaLimite(?\DateTime $fechaLimite): static { $this->fechaLimite = $fechaLimite; return $this; }

    public function getFilePath(): ?string { return $this->file_path; }
    public function setFilePath(?string $file_path): static { $this->file_path = $file_path; return $this; }

    public function getCreatedBy(): ?int { return $this->created_by; }
    public function setCreatedBy(?int $created_by): static { $this->created_by = $created_by; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->created_at; }
    public function setCreatedAt(?\DateTimeImmutable $created_at): static { $this->created_at = $created_at; return $this; }

    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updated_at; }
    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static { $this->updated_at = $updated_at; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }
}
