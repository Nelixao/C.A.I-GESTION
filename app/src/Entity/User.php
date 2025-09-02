<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

use App\Entity\Role;
use App\Entity\Oficio;
use App\Entity\Circular;
use App\Entity\Correspondence;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $contrasena = null;

    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy: 'users')]
    #[ORM\JoinColumn(name: 'role_id', referencedColumnName: 'id')]
    private ?Role $role = null;

    #[ORM\OneToMany(targetEntity: Oficio::class, mappedBy: 'user')]
    private Collection $oficios;

    #[ORM\OneToMany(targetEntity: Circular::class, mappedBy: 'user')]
    private Collection $circulares;

    #[ORM\OneToMany(targetEntity: Correspondence::class, mappedBy: 'user')]
    private Collection $correspondencias;

    public function __construct()
    {
        $this->oficios = new ArrayCollection();
        $this->circulares = new ArrayCollection();
        $this->correspondencias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = ['ROLE_USER'];

        if ($this->role && $this->role->getName()) {
            $roles[] = strtoupper($this->role->getName());
        }

        return array_unique($roles);
    }

    public function getContrasena(): ?string
    {
        return $this->contrasena;
    }

    public function setContrasena(string $contrasena): static
    {
        $this->contrasena = $contrasena;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->contrasena ?? '';
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
        // Aquí puedes limpiar datos temporales si los tienes
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): static
    {
        $this->role = $role;
        return $this;
    }

    /** @return Collection<int, Oficio> */
    public function getOficios(): Collection
    {
        return $this->oficios;
    }

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
            if ($oficio->getUser() === $this) {
                $oficio->setUser(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Circular> */
    public function getCirculares(): Collection
    {
        return $this->circulares;
    }

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
            if ($circular->getUser() === $this) {
                $circular->setUser(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Correspondence> */
    public function getCorrespondencias(): Collection
    {
        return $this->correspondencias;
    }

    public function addCorrespondencia(Correspondence $correspondencia): static
    {
        if (!$this->correspondencias->contains($correspondencia)) {
            $this->correspondencias->add($correspondencia);
            $correspondencia->setUser($this);
        }
        return $this;
    }

    public function removeCorrespondencia(Correspondence $correspondencia): static
    {
        if ($this->correspondencias->removeElement($correspondencia)) {
            if ($correspondencia->getUser() === $this) {
                $correspondencia->setUser(null);
            }
        }
        return $this;
    }
    public function getFullName(): string
{
    return sprintf('%s (%s)', $this->getNombre(), $this->getEmail());
}
#[ORM\Column(length: 100)]
private ?string $nombre = null;

public function getNombre(): ?string
{
    return $this->nombre;
}

public function setNombre(string $nombre): static
{
    $this->nombre = $nombre;
    return $this;
}

}
