<?php

namespace App\Entity;

use App\Repository\CorrespondenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(fields: ['numControl'], message: 'Ese folio ya existe.')]

#[ORM\Entity(repositoryClass: CorrespondenceRepository::class)]
class Correspondence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60, unique: true)]
    private ?string $numControl = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fechaRecepcion = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $remitente = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $areaOrigen = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $areaDestino = null;

    #[ORM\Column(length: 255)]
    private ?string $asunto = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 20)]
    private ?string $estado = 'recibido';

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaLimite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaCierre = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(options: ['default' => false])]
    private bool $urgente = false;

    #[ORM\OneToMany(mappedBy: 'correspondence', targetEntity: Oficio::class)]
    private Collection $oficios;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'correspondencias')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->oficios = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->estado = 'recibido';
        $this->fechaRecepcion = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumControl(): ?string
    {
        return $this->numControl;
    }

    public function setNumControl(string $numControl): static
    {
        $this->numControl = $numControl;
        return $this;
    }

    public function getFechaRecepcion(): ?\DateTime
    {
        return $this->fechaRecepcion;
    }

    public function setFechaRecepcion(\DateTime $fechaRecepcion): static
    {
        $this->fechaRecepcion = $fechaRecepcion;
        return $this;
    }

    public function getRemitente(): ?string
    {
        return $this->remitente;
    }

    public function setRemitente(?string $remitente): static
    {
        $this->remitente = $remitente;
        return $this;
    }

    public function getAreaOrigen(): ?string
    {
        return $this->areaOrigen;
    }

    public function setAreaOrigen(?string $areaOrigen): static
    {
        $this->areaOrigen = $areaOrigen;
        return $this;
    }

    public function getAreaDestino(): ?string
    {
        return $this->areaDestino;
    }

    public function setAreaDestino(?string $areaDestino): static
    {
        $this->areaDestino = $areaDestino;
        return $this;
    }

    public function getAsunto(): ?string
    {
        return $this->asunto;
    }

    public function setAsunto(string $asunto): static
    {
        $this->asunto = $asunto;
        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;
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

    public function isUrgente(): bool { return $this->urgente; }
    public function setUrgente(bool $urgente): static { $this->urgente = $urgente; return $this; }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Collection<int, Oficio>
     */
    public function getOficios(): Collection
    {
        return $this->oficios;
    }

    public function addOficio(Oficio $oficio): static
    {
        if (!$this->oficios->contains($oficio)) {
            $this->oficios->add($oficio);
            $oficio->setCorrespondence($this);
        }

        return $this;
    }

    public function removeOficio(Oficio $oficio): static
    {
        if ($this->oficios->removeElement($oficio)) {
            // set the owning side to null (unless already changed)
            if ($oficio->getCorrespondence() === $this) {
                $oficio->setCorrespondence(null);
            }
        }

        return $this;
    }

}
