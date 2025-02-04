<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{

    private $counter = 1;

    public function __construct(private SluggerInterface $slugger) {}

    public function load(ObjectManager $manager): void
    {
        // Création de la catégorie parente
        $parent = $this->createCategory('Instruments de Musique', 'inst.png', null, $manager);

        // Sous-catégories associées à la catégorie parente
        $this->createCategory('Instruments à Cordes', 'Acordes.jpg', $parent, $manager);
        $this->createCategory('Instruments à Vent', 'vent.jpg', $parent, $manager);
        $this->createCategory('Instruments à Percussion', 'percussion.jpg', $parent, $manager);

        $manager->flush();
    }

    /**
     * Crée une catégorie avec un nom, une photo et un parent facultatif
     */
    public function createCategory(string $nom, string $photo, ?Categories $parent, ObjectManager $manager): Categories
    {
        $category = new Categories();
        $category->setNom($nom);
        $category->setPhoto($photo);
        $category->setSlug($this->slugger->slug($nom)->lower());
        $category->setParent($parent);

        $manager->persist($category);

        $this->addReference('cat-'.$this->counter, $category);
        $this->counter++;



        return $category;
    }
}
