<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
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

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    private ?LivraisonDetails $livraisonDetails = null;

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

    public function getLivraisonDetails(): ?LivraisonDetails
    {
        return $this->livraisonDetails;
    }

    public function setLivraisonDetails(?LivraisonDetails $livraisonDetails): static
    {
        $this->livraisonDetails = $livraisonDetails;

        return $this;
    }
}
