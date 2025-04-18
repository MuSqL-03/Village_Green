<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Attribute\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
#[ApiResource(  normalizationContext: ['groups' => ['read:category']]  )]
class Categories
{
    use SlugTrait;

    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:category', 'read:product'])]   
     private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:category', 'read:product'])]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:category', 'read:product'])]
     private ?string $photo = null;

  /*   #[ORM\Column]
     private ?int $categoryCommande = null; */

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'categories')]
    #[ORM\JoinColumn(name:'parent_id', referencedColumnName:'id', onDelete: 'CASCADE')]
    #[Groups(['read:category'])]
     private ?self $parent = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: Categories::class, mappedBy: 'parent')]
    #[Groups(['read:category'])]
    private Collection $categories;

    /**
     * @var Collection<int, Products>
     */
    #[ORM\OneToMany(targetEntity: Products::class, mappedBy: 'categories')]
    #[Groups(['read:category'])]
    private Collection $products;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->products = new ArrayCollection();
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

 /*   public function getcategoryCommande(): ?int 
   {
        return $this->categoryCommande;
    }

   public function setcategoryCommande(int $categoryCommande): self
   {
       $this->categoryCommande = $categoryCommande;

      return $this;
  } */

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): static
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(self $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->setParent($this);
        }

        return $this;
    }

    public function removeCategory(self $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getParent() === $this) {
                $category->setParent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Products $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategories($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategories() === $this) {
                $product->setCategories(null);
            }
        }

        return $this;
    }
}
