<?php

namespace App\Entity;

use App\Repository\CisaeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(fields: ['numero'], message: 'Ese número de expediente ya existe.')]
#[ORM\Entity(repositoryClass: CisaeRepository::class)]
class Cisae
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60, unique: true)]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 20, options: ['default' => 'ABIERTO'])]
    private ?string $estado = 'ABIERTO'; // ABIERTO, EN_TRAMITE, CERRADO

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaInicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaTermino = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $area = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observaciones = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'cisae', targetEntity: Oficio::class)]
    private Collection $oficios;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->estado    = 'ABIERTO';
        $this->oficios   = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getNumero(): ?string { return $this->numero; }
    public function setNumero(string $numero): static { $this->numero = $numero; return $this; }

    public function getTitulo(): ?string { return $this->titulo; }
    public function setTitulo(string $titulo): static { $this->titulo = $titulo; return $this; }

    public function getDescripcion(): ?string { return $this->descripcion; }
    public function setDescripcion(?string $descripcion): static { $this->descripcion = $descripcion; return $this; }

    public function getEstado(): ?string { return $this->estado; }
    public function setEstado(string $estado): static { $this->estado = $estado; return $this; }

    public function getFechaInicio(): ?\DateTime { return $this->fechaInicio; }
    public function setFechaInicio(?\DateTime $fechaInicio): static { $this->fechaInicio = $fechaInicio; return $this; }

    public function getFechaTermino(): ?\DateTime { return $this->fechaTermino; }
    public function setFechaTermino(?\DateTime $fechaTermino): static { $this->fechaTermino = $fechaTermino; return $this; }

    public function getArea(): ?string { return $this->area; }
    public function setArea(?string $area): static { $this->area = $area; return $this; }

    public function getObservaciones(): ?string { return $this->observaciones; }
    public function setObservaciones(?string $obs): static { $this->observaciones = $obs; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): static { $this->createdAt = $createdAt; return $this; }

    /** @return Collection<int, Oficio> */
    public function getOficios(): Collection { return $this->oficios; }

    public function addOficio(Oficio $oficio): static
    {
        if (!$this->oficios->contains($oficio)) {
            $this->oficios->add($oficio);
            $oficio->setCisae($this);
        }
        return $this;
    }

    public function removeOficio(Oficio $oficio): static
    {
        if ($this->oficios->removeElement($oficio)) {
            if ($oficio->getCisae() === $this) {
                $oficio->setCisae(null);
            }
        }
        return $this;
    }
}
