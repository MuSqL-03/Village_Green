<?php

namespace App\Entity;

use App\Repository\CommandeDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeDetailsRepository::class)]
class CommandeDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)] // ✅ Ensure correct precision
    private ?float $prix = null; // ✅ Allow null initially

    #[ORM\ManyToOne(inversedBy: 'commandeDetails')]
    private ?Commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'commandeDetails')]
    private ?Products $products = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getPrix(): ?float // ✅ Allow null return
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self // ✅ Setter ensures valid price
    {
        $this->prix = round($prix, 2); // ✅ Ensure price is rounded correctly
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

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): static
    {
        $this->products = $products;
        return $this;
    }
}
