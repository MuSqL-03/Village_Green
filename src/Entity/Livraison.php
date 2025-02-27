<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseLivraison = null;

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    private ?Commande $commande = null;

    /**
     * @var Collection<int, LivraisonDetails>
     */
    #[ORM\OneToMany(mappedBy: 'livraison', targetEntity: LivraisonDetails::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $livraisonDetails;

    public function __construct()
    {
        $this->livraisonDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): static
    {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): static
    {
        $this->adresseLivraison = $adresseLivraison;
        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;
        return $this;
    }

    /**
     * @return Collection<int, LivraisonDetails>
     */
    public function getLivraisonDetails(): Collection
    {
        return $this->livraisonDetails;
    }

    public function addLivraisonDetail(LivraisonDetails $livraisonDetail): static
    {
        if (!$this->livraisonDetails->contains($livraisonDetail)) {
            $this->livraisonDetails->add($livraisonDetail);
            $livraisonDetail->setLivraison($this);
        }
        return $this;
    }

    public function removeLivraisonDetail(LivraisonDetails $livraisonDetail): static
    {
        if ($this->livraisonDetails->removeElement($livraisonDetail)) {
            if ($livraisonDetail->getLivraison() === $this) {
                $livraisonDetail->setLivraison(null);
            }
        }
        return $this;
    }
}
