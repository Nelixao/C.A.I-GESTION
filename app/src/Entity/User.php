<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

use App\Entity\Role;
use App\Entity\Oficio;
use App\Entity\Circular;
use App\Entity\Correspondence;
use App\Entity\Scanner;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: "user")]
#[ORM\HasLifecycleCallbacks]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    // contraseña encriptada
    #[ORM\Column(length: 255)]
    private ?string $contrasena = null;

    // rol interno (tabla roles existente)
    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy: 'users')]
    #[ORM\JoinColumn(name: 'role_id', referencedColumnName: 'id', onDelete: 'SET NULL', nullable: true)]
    private ?Role $role = null;

    // rol textual para control rápido
    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'Invitado'])]
    private ?string $rol = 'Invitado';

    #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $fecha_creacion = null;

    #[ORM\OneToMany(targetEntity: Oficio::class, mappedBy: 'user')]
    private Collection $oficios;

    #[ORM\OneToMany(targetEntity: Circular::class, mappedBy: 'user')]
    private Collection $circulares;

    #[ORM\OneToMany(targetEntity: Correspondence::class, mappedBy: 'user')]
    private Collection $correspondencias;

    #[ORM\OneToMany(targetEntity: Scanner::class, mappedBy: 'user')]
    private Collection $scanners;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $nombre = null;

    public function __construct()
    {
        $this->oficios = new ArrayCollection();
        $this->circulares = new ArrayCollection();
        $this->correspondencias = new ArrayCollection();
        $this->scanners = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    public function getUserIdentifier(): string { return (string) $this->email; }

    public function getRoles(): array
    {
        $roles = ['ROLE_USER'];

        if ($this->role && $this->role->getName()) {
            $name = strtoupper($this->role->getName());
            $roles[] = str_starts_with($name, 'ROLE_') ? $name : 'ROLE_' . $name;
        }
        if ($this->rol) {
            $r = strtoupper($this->rol);
            if (in_array($r, ['ADMIN','ROLE_ADMIN'], true)) {
                $roles[] = 'ROLE_ADMIN';
            }
        }
        return array_unique($roles);
    }

    public function getContrasena(): ?string { return $this->contrasena; }
    public function setContrasena(string $contrasena): static { $this->contrasena = $contrasena; return $this; }

    public function getPassword(): string { return $this->contrasena ?? ''; }
    public function getSalt(): ?string { return null; }
    public function eraseCredentials(): void {}

    public function getRol(): ?string { return $this->rol; }
    public function setRol(string $rol): static { $this->rol = $rol; return $this; }

    public function getFechaCreacion(): ?\DateTimeImmutable { return $this->fecha_creacion; }
    public function setFechaCreacion(?\DateTimeImmutable $f): static { $this->fecha_creacion = $f; return $this; }

    public function getRole(): ?Role { return $this->role; }
    public function setRole(?Role $role): static { $this->role = $role; return $this; }

    /** @return Collection<int, Oficio> */
    public function getOficios(): Collection { return $this->oficios; }
    public function addOficio(Oficio $oficio): static
    {
        if (!$this->oficios->contains($oficio)) {
            $this->oficios->add($oficio);
            $oficio->setUser($this);
        }
        return $this;
    }
    public function removeOficio(Oficio $oficio): static
    {
        if ($this->oficios->removeElement($oficio)) {
            if ($oficio->getUser() === $this) { $oficio->setUser(null); }
        }
        return $this;
    }

    /** @return Collection<int, Circular> */
    public function getCirculares(): Collection { return $this->circulares; }
    public function addCircular(Circular $circular): static
    {
        if (!$this->circulares->contains($circular)) {
            $this->circulares->add($circular);
            $circular->setUser($this);
        }
        return $this;
    }
    public function removeCircular(Circular $circular): static
    {
        if ($this->circulares->removeElement($circular)) {
            if ($circular->getUser() === $this) { $circular->setUser(null); }
        }
        return $this;
    }

    /** @return Collection<int, Correspondence> */
    public function getCorrespondencias(): Collection { return $this->correspondencias; }
    public function addCorrespondencia(Correspondence $c): static
    {
        if (!$this->correspondencias->contains($c)) {
            $this->correspondencias->add($c);
            $c->setUser($this);
        }
        return $this;
    }
    public function removeCorrespondencia(Correspondence $c): static
    {
        if ($this->correspondencias->removeElement($c)) {
            if ($c->getUser() === $this) { $c->setUser(null); }
        }
        return $this;
    }

    /** @return Collection<int, Scanner> */
    public function getScanners(): Collection { return $this->scanners; }
    public function addScanner(Scanner $scanner): static
    {
        if (!$this->scanners->contains($scanner)) {
            $this->scanners->add($scanner);
            $scanner->setUser($this);
        }
        return $this;
    }
    public function removeScanner(Scanner $scanner): static
    {
        if ($this->scanners->removeElement($scanner)) {
            if ($scanner->getUser() === $this) { $scanner->setUser(null); }
        }
        return $this;
    }

    public function getNombre(): ?string { return $this->nombre; }
    public function setNombre(?string $nombre): static { $this->nombre = $nombre; return $this; }

    #[ORM\PrePersist]
    public function setDefaultFechaCreacion(): void
    {
        if ($this->fecha_creacion === null) {
            $this->fecha_creacion = new \DateTimeImmutable();
        }
    }
}
