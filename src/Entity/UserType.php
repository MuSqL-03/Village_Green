<?php

namespace App\Entity;

use App\Repository\UserTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserTypeRepository::class)]
class UserType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Users>
     */
    #[ORM\OneToMany(targetEntity: Users::class, mappedBy: 'usertype')]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setUsertype($this);
        }

        return $this;
    }

    public function removeUser(Users $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getUsertype() === $this) {
                $user->setUsertype(null);
            }
        }

        return $this;
    }
}
