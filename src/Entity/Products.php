<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Attribute\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
#[ApiResource(  normalizationContext: ['groups' => ['read:product']]  )]
class Products
{

    use SlugTrait;


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:product', 'read:category'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:product', 'read:category'])]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['read:product'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['read:product'])]
    private ?int $prix = null;

    #[ORM\Column]
    #[Groups(['read:product'])]
    private ?int $stock = null;

    #[ORM\Column(options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 100)]
    #[Groups(['read:product'])]
    private ?string $referenceFournisseur = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:product'])]
    private ?string $photo = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['read:product'])]
    private ?Categories $categories = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Fournisseur $fournisseur = null;

    /**
     * @var Collection<int, CommandeDetails>
     */
    #[ORM\OneToMany(targetEntity: CommandeDetails::class, mappedBy: 'products')]
    private Collection $commandeDetails;

    /**
     * @var Collection<int, LivraisonDetails>
     */
    #[ORM\OneToMany(targetEntity: LivraisonDetails::class, mappedBy: 'product')]
    private Collection $livraisonDetails;

    public function __construct()
    {
        $this->commandeDetails = new ArrayCollection();
        $this->livraisonDetails = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

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

    public function getReferenceFournisseur(): ?string
    {
        return $this->referenceFournisseur;
    }

    public function setReferenceFournisseur(string $referenceFournisseur): static
    {
        $this->referenceFournisseur = $referenceFournisseur;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): static
    {
        $this->categories = $categories;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, CommandeDetails>
     */
    public function getCommandeDetails(): Collection
    {
        return $this->commandeDetails;
    }

    public function addCommandeDetail(CommandeDetails $commandeDetail): static
    {
        if (!$this->commandeDetails->contains($commandeDetail)) {
            $this->commandeDetails->add($commandeDetail);
            $commandeDetail->setProducts($this);
        }

        return $this;
    }

    public function removeCommandeDetail(CommandeDetails $commandeDetail): static
    {
        if ($this->commandeDetails->removeElement($commandeDetail)) {
            // set the owning side to null (unless already changed)
            if ($commandeDetail->getProducts() === $this) {
                $commandeDetail->setProducts(null);
            }
        }

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
            $livraisonDetail->setProduct($this);
        }

        return $this;
    }

    public function removeLivraisonDetail(LivraisonDetails $livraisonDetail): static
    {
        if ($this->livraisonDetails->removeElement($livraisonDetail)) {
            // set the owning side to null (unless already changed)
            if ($livraisonDetail->getProduct() === $this) {
                $livraisonDetail->setProduct(null);
            }
        }

        return $this;
    }
}
