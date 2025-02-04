<?php

namespace App\DataFixtures;

use App\Entity\Products;
use App\Entity\Categories;
use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductsFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private SluggerInterface $slugger) {}

    public function load(ObjectManager $manager): void
    {
        $products = [
            // Instruments à Cordes
            ['Guitare Électrique', 'Guitare en bois de qualité supérieure.', 1500, 20, 'guitar_electric1.jpg', 'category_cordes', 'fournisseur_1'],
            ['Piano', 'Piano en bois de qualité supérieure.', 2000, 15, 'piano1.jpg', 'category_cordes', 'fournisseur_1'],
            ['Contrebasse', 'Contrebasse de haute qualité.', 1800, 10, 'base1.jpg', 'category_cordes', 'fournisseur_2'],
            ['Viola', 'Viola avec un son riche.', 1200, 12, 'viola1.jpg', 'category_cordes', 'fournisseur_2'],
            ['Violon', 'Violon de luthier.', 1400, 18, 'violon1.jpg', 'category_cordes', 'fournisseur_3'],
            ['Violoncelle', 'Violoncelle classique.', 1600, 8, 'violoncelle1.jpg', 'category_cordes', 'fournisseur_3'],
            ['Clavier', 'Clavier numérique moderne.', 1100, 25, 'clavier1.jpg', 'category_cordes', 'fournisseur_1'],


            // Instruments à Vent
            ['Cornet', 'Instrument à vent en cuivre.', 800, 15, 'cornet2.jpg', 'category_vent', 'fournisseur_4'],
            ['Saxophone', 'Saxophone en laiton.', 1200, 10, 'saxophone2.jpg', 'category_vent', 'fournisseur_4'],
            ['Trombone', 'Trombone à coulisse.', 900, 8, 'trombone2.jpg', 'category_vent', 'fournisseur_5'],
            ['Trompette', 'Trompette brillante.', 850, 20, 'trumpet2.jpg', 'category_vent', 'fournisseur_5'],
            ['Tuba', 'Tuba orchestral.', 1500, 5, 'tuba2.jpg', 'category_vent', 'fournisseur_4'],

            // Instruments à Percussion
            ['Cymbale', 'Cymbale de haute qualité.', 300, 10, 'cymbal.jpg', 'category_percussion', 'fournisseur_6'],
            ['Batterie', 'Batterie acoustique.', 1000, 7, 'battry.png', 'category_percussion', 'fournisseur_6'],
            ['Tambour', 'Tambour traditionnel.', 400, 12, 'tambour.jpg', 'category_percussion', 'fournisseur_7'],
            ['Tam-Tam', 'Tam-Tam oriental.', 350, 9, 'tamtam.jpg', 'category_percussion', 'fournisseur_7'],
        ];

        foreach ($products as [$nom, $description, $prix, $stock, $photo, $categoryReference, $fournisseurReference]) {
            $this->createProduct($nom, $description, $prix, $stock, $photo, $categoryReference, $fournisseurReference, $manager);
        }

        $manager->flush();
    }

    private function createProduct(
        string $nom,
        string $description,
        int $prix,
        int $stock,
        string $photo,
        string $categoryReference,
        string $fournisseurReference,
        ObjectManager $manager
    ): void {
        $product = new Products();
        $product->setNom($nom);
        $product->setDescription($description);
        $product->setPrix($prix);
        $product->setStock($stock);
        $product->setPhoto($photo);
        $product->setSlug($this->slugger->slug($nom)->lower());

        // Récupérer la catégorie (en supposant que vous avez 4 catégories)
        $category = $this->getReference('cat-' . mt_rand(1, 4), Categories::class);
        $product->setCategories($category);

        // Corriger la référence du fournisseur pour utiliser le format correct
        $fournisseur = $this->getReference($fournisseurReference, Fournisseur::class); // Le format du fournisseur est déjà correct, donc on l'utilise directement
        $product->setReferenceFournisseur($fournisseur->getId());

        // Enregistrer la référence du produit pour réutilisation
        $this->setReference('prod-' . strtolower(str_replace(' ', '-', $nom)), $product);

        $manager->persist($product);
    }

    public function getDependencies(): array
    {
        return [
            CategoriesFixtures::class,
            FournisseursFixtures::class,
        ];
    }
}
