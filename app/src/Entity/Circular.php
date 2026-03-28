<?php

namespace App\Entity;

use App\Repository\CircularRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(fields: ['numCircular'], message: 'Ese folio ya existe.')]
#[ORM\Entity(repositoryClass: CircularRepository::class)]
class Circular
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Folio/Número de circular (único)
    #[ORM\Column(length: 60, unique: true)]
    private ?string $numCircular = null;

    // Fecha de emisión/recepción de la circular
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    // Puedes dejarlo obligatorio si así lo quieren, pero para MVP conviene nullable
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $contenido = null;

    // ABIERTA | EN_TRAMITE | CERRADA | ARCHIVADA
    #[ORM\Column(length: 20)]
    private ?string $estado = 'ABIERTA';

    // Si aplica término institucional (SISAI o instrucción con fecha)
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaLimite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaCierre = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'circulares')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->estado = 'ABIERTA';
        $this->fecha = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCircular(): ?string
    {
        return $this->numCircular;
    }

    public function setNumCircular(string $numCircular): static
    {
        $this->numCircular = $numCircular;
        return $this;
    }

    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    public function setFecha(\DateTime $fecha): static
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(?string $contenido): static
    {
        $this->contenido = $contenido;
        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        $this->estado = $estado;
        return $this;
    }

    public function getFechaLimite(): ?\DateTime
    {
        return $this->fechaLimite;
    }

    public function setFechaLimite(?\DateTime $fechaLimite): static
    {
        $this->fechaLimite = $fechaLimite;
        return $this;
    }

    public function getFechaCierre(): ?\DateTime
    {
        return $this->fechaCierre;
    }

    public function setFechaCierre(?\DateTime $fechaCierre): static
    {
        $this->fechaCierre = $fechaCierre;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
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
}
