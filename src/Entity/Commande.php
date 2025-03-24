<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Attribute\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource(  normalizationContext: ['groups' => ['read:commande']]  )]

class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:commande'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['read:commande'])]
    private ?string $reference = null;

    #[ORM\Column(options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: "float", nullable: false, options: ["default" => 0])]
    private float $reduction = 0.0;

    #[ORM\Column(length: 255)]
    #[Groups(['read:commande'])]
    private ?string $etat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['read:commande'])]
    private ?\DateTimeInterface $dateFacture = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:commande'])]
    private ?string $adresseFacture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['read:commande'])]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:commande'])]
    private ?string $adresseLivraison = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[Groups(['read:commande'])]
    private ?Users $users = null;

    #[ORM\Column]
    private ?float $coefficient = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Groups(['read:commande'])]
    private ?string $total = null;

    #[ORM\OneToMany(targetEntity: CommandeDetails::class, mappedBy: 'commande')]
    #[Groups(['read:commande'])]
    private Collection $commandeDetails;

    #[ORM\OneToMany(targetEntity: PaymentMethode::class, mappedBy: 'commande')]
    #[Groups(['read:commande'])]
    private Collection $paymentMethodes;

    #[ORM\OneToMany(targetEntity: Livraison::class, mappedBy: 'commande')]
    #[Groups(['read:commande'])]
    private Collection $livraisons;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['read:commande'])]
    private ?\DateTimeInterface $datePayment = null;

    public function __construct()
    {
        $this->commandeDetails = new ArrayCollection();
        $this->paymentMethodes = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getReduction(): float
    {
        return $this->reduction;
    }

    public function setReduction(float $reduction): static
    {
        $this->reduction = $reduction;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTimeInterface $dateFacture): static
    {
        $this->dateFacture = $dateFacture;
        return $this;
    }

    public function getAdresseFacture(): ?string
    {
        return $this->adresseFacture;
    }

    public function setAdresseFacture(string $adresseFacture): static
    {
        $this->adresseFacture = $adresseFacture;
        return $this;
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

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): static
    {
        $this->users = $users;
        return $this;
    }

    public function getCoefficient(): ?float
    {
        return $this->coefficient;
    }

    public function setCoefficient(float $coefficient): static
    {
        $this->coefficient = $coefficient;
        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): static
    {
        $this->total = $total;
        return $this;
    }

    public function getCommandeDetails(): Collection
    {
        return $this->commandeDetails;
    }

    public function addCommandeDetail(CommandeDetails $commandeDetail): static
    {
        if (!$this->commandeDetails->contains($commandeDetail)) {
            $this->commandeDetails->add($commandeDetail);
            $commandeDetail->setCommande($this);
        }
        return $this;
    }

    public function removeCommandeDetail(CommandeDetails $commandeDetail): static
    {
        if ($this->commandeDetails->removeElement($commandeDetail)) {
            if ($commandeDetail->getCommande() === $this) {
                $commandeDetail->setCommande(null);
            }
        }
        return $this;
    }

    public function getPaymentMethodes(): Collection
    {
        return $this->paymentMethodes;
    }

    public function addPaymentMethode(PaymentMethode $paymentMethode): static
    {
        if (!$this->paymentMethodes->contains($paymentMethode)) {
            $this->paymentMethodes->add($paymentMethode);
            $paymentMethode->setCommande($this);
        }
        return $this;
    }

    public function removePaymentMethode(PaymentMethode $paymentMethode): static
    {
        if ($this->paymentMethodes->removeElement($paymentMethode)) {
            if ($paymentMethode->getCommande() === $this) {
                $paymentMethode->setCommande(null);
            }
        }
        return $this;
    }

    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): static
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons->add($livraison);
            $livraison->setCommande($this);
        }
        return $this;
    }

    public function removeLivraison(Livraison $livraison): static
    {
        if ($this->livraisons->removeElement($livraison)) {
            if ($livraison->getCommande() === $this) {
                $livraison->setCommande(null);
            }
        }
        return $this;
    }

    public function getDatePayment(): ?\DateTimeInterface
    {
        return $this->datePayment;
    }

    public function setDatePayment(\DateTimeInterface $datePayment): static
    {
        $this->datePayment = $datePayment;
        return $this;
    }
}
