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

        $parent = $this->createCategory('Guitares & Bases', 'git.jpg', null, $manager);


         // Sous-catégories associées à la catégorie parente
         $this->createCategory('Guitares Electriques ', 'gitelec.jpg', $parent, $manager);
         $this->createCategory('Guitares Clasiques ', 'gitclas.jpg', $parent, $manager);
         $this->createCategory('Guitares Acoustiques ', 'gitacous.jpg', $parent, $manager);
         $this->createCategory('Basses Electriques ', 'baselec.jpg', $parent, $manager);
         


       
        $parent = $this->createCategory('Batteries & Percussions', 'btt.jpg', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Batteries Acoustiques ', 'batery1.jpg', $parent, $manager);
         $this->createCategory('Batteries Electroniques ', 'batery3.jpg', $parent, $manager);
         $this->createCategory('Percussions ', 'batery5.jpg', $parent, $manager);
         $this->createCategory('Percussions de Défilé  ', 'batery6.jpg', $parent, $manager);
                 


        $parent = $this->createCategory('Pianos & Clavier', 'pi.jpg', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Piano à Queue ', 'piano.jpg', $parent, $manager);
         $this->createCategory('Claviers Arrangeurs ', 'clavar.jpg', $parent, $manager);
         $this->createCategory('Claviers Maîtres ', 'clamet.jpg', $parent, $manager);
         $this->createCategory('Accordéons ', 'acorr.jpg', $parent, $manager);
        


        $parent = $this->createCategory('Instruments Traditionnels', 'tr.jpg', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Instruments à Cordes Frottées ', 'acorde.jpg', $parent, $manager);
         $this->createCategory('Instruments de Folklore ', 'fol.jpg', $parent, $manager);
         $this->createCategory('Percussions Clasiques ', 'pc.jpg', $parent, $manager);
         $this->createCategory('Méditation & Thérapie Musicale ', 'med.jpg', $parent, $manager);

         
         



        $parent = $this->createCategory('Instruments à Vent', 'v.jpg', null, $manager);

         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Saxophones ', 'sax.jpg', $parent, $manager);
         $this->createCategory('Trompettes ', 'tromp.jpg', $parent, $manager);
         $this->createCategory('Trombones ', 'trom.jpg', $parent, $manager);
         $this->createCategory('Euphoniums ', 'eu.jpg', $parent, $manager);
         



        $parent = $this->createCategory('Microphones', 'mi.jpg', null, $manager);

         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Vocal Microphones ', 'mv.jpg', $parent, $manager);
         $this->createCategory('Wireless Microphones ', 'wm.jpg', $parent, $manager);
         
 
        



       



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
