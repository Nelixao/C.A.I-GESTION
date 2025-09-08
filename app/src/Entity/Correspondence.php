<?php

namespace App\Entity;

use App\Repository\CorrespondenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CorrespondenceRepository::class)]
class Correspondence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 45)]
    private ?string $subject = null;

    #[ORM\Column(length: 60)]
    private ?string $body = null;

    #[ORM\Column(length: 50)]
    private ?string $sender = null;

    #[ORM\Column(length: 57)]
    private ?string $receiver = null;

    #[ORM\Column]
    private ?\DateTime $date = null;

    #[ORM\Column(length: 68)]
    private ?string $file_path = null;

    #[ORM\Column]
    private ?int $created_by = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $created_at = null;

    // Nuevos campos solicitados por el esquema
    #[ORM\Column(length: 20, unique: true, nullable: true)]
    private ?string $num_control = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fecha_recepcion = null;

    #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $fecha_registro = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;

    #[ORM\ManyToOne(inversedBy: 'correspondecia_id')]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'correspondence', targetEntity: Oficio::class)]
    private $oficios;

    #[ORM\OneToOne]
    #[ORM\JoinColumn(name: 'id_escaneo', referencedColumnName: 'id', nullable: true)]
    private ?Scanner $scanner = null;

    #[ORM\Column(length: 20, options: ['default' => 'Pendiente'])]
    private ?string $status = 'Pendiente'; // valores: Pendiente, En trámite, Concluido, Archivado

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): static
    {
        $this->body = $body;

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

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(string $receiver): static
    {
        $this->receiver = $receiver;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): static
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

    /** @return array<int, Oficio>|\Doctrine\Common\Collections\Collection */
    public function getOficios()
    {
        return $this->oficios;
    }

    public function addOficio(Oficio $oficio): static
    {
        if (!in_array($oficio, (array)$this->oficios, true)) {
            $this->oficios[] = $oficio;
            $oficio->setCorrespondence($this);
        }
        return $this;
    }

    public function removeOficio(Oficio $oficio): static
    {
        if (is_iterable($this->oficios) && in_array($oficio, (array)$this->oficios, true)) {
            // remove without strict Collection API to avoid dependency
            $this->oficios = array_filter((array)$this->oficios, fn($o) => $o !== $oficio);
            if ($oficio->getCorrespondence() === $this) {
                $oficio->setCorrespondence(null);
            }
        }
        return $this;
    }

    public function getScanner(): ?Scanner { return $this->scanner; }
    public function setScanner(?Scanner $scanner): static { $this->scanner = $scanner; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getNumControl(): ?string { return $this->num_control; }
    public function setNumControl(?string $n): static { $this->num_control = $n; return $this; }

    public function getFechaRecepcion(): ?\DateTime { return $this->fecha_recepcion; }
    public function setFechaRecepcion(?\DateTime $f): static { $this->fecha_recepcion = $f; return $this; }

    public function getFechaRegistro(): ?\DateTimeImmutable { return $this->fecha_registro; }
    public function setFechaRegistro(?\DateTimeImmutable $f): static { $this->fecha_registro = $f; return $this; }
}
