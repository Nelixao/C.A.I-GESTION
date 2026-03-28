<?php

namespace App\Entity;

use App\Repository\CisaeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CisaeRepository::class)]
class Cisae
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, unique: true, nullable: true)]
    private ?string $folio = null;

    #[ORM\Column(length: 120)]
    private ?string $titulo = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100)]
    private ?string $area = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime $fechaLimite = null;

    #[ORM\Column(length: 20, options: ['default' => 'Pendiente'])]
    private ?string $status = 'Pendiente';

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int { return $this->id; }

    public function getFolio(): ?string { return $this->folio; }
    public function setFolio(?string $folio): static { $this->folio = $folio; return $this; }

    public function getTitulo(): ?string { return $this->titulo; }
    public function setTitulo(string $titulo): static { $this->titulo = $titulo; return $this; }

    public function getDescripcion(): ?string { return $this->descripcion; }
    public function setDescripcion(?string $descripcion): static { $this->descripcion = $descripcion; return $this; }

    public function getArea(): ?string { return $this->area; }
    public function setArea(string $area): static { $this->area = $area; return $this; }

    public function getFechaLimite(): ?\DateTime { return $this->fechaLimite; }
    public function setFechaLimite(\DateTime $fechaLimite): static { $this->fechaLimite = $fechaLimite; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): static { $this->createdAt = $createdAt; return $this; }

    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static { $this->updatedAt = $updatedAt; return $this; }
}
