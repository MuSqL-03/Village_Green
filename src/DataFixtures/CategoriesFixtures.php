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

        $parent = $this->createCategory('Guitares & Bases', 'git.jpg', 'c1', null, $manager);


         // Sous-catégories associées à la catégorie parente
         $this->createCategory('Guitares Electriques ', 'gitelec.jpg', 'category_electric_guitar1', $parent, $manager);
         $this->createCategory('Guitares Clasiques ', 'gitclas.jpg', 'category_classical_guitar2', $parent, $manager);
         $this->createCategory('Guitares Acoustiques ', 'gitacous.jpg', 'category_acoustic_guitar3', $parent, $manager);
         $this->createCategory('Basses Electriques ', 'baselec.jpg', 'category_bass_guitar4', $parent, $manager);
         


       
        $parent = $this->createCategory('Batteries & Percussions', 'btt.jpg','c2', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Batteries Acoustiques ', 'batery1.jpg','category_acoustic_drums1', $parent, $manager);
         $this->createCategory('Batteries Electroniques ', 'batery3.jpg', 'category_electronic_drums2', $parent, $manager);
         $this->createCategory('Percussions ', 'batery5.jpg', 'category_percussion_drums3',  $parent, $manager);
         $this->createCategory('Percussions de Défilé  ', 'batery6.jpg', 'category_marching_drums4', $parent, $manager);
                 


        $parent = $this->createCategory('Pianos & Clavier', 'pi.jpg', 'c3', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Piano à Queue ', 'piano.jpg', 'category_piano1', $parent, $manager);
         $this->createCategory('Claviers Arrangeurs ', 'clavar.jpg', 'category_keyboard2', $parent, $manager);
         $this->createCategory('Claviers Maîtres ', 'clamet.jpg', 'category_master_keyboard3', $parent, $manager);
         $this->createCategory('Accordéons ', 'acorr.jpg', 'category_accordion4', $parent, $manager);
        


        $parent = $this->createCategory('Instruments Traditionnels', 'tr.jpg', 'c4', null, $manager);


         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Instruments à Cordes Frottées ', 'acorde.jpg', 'category_traditional_instruments1', $parent, $manager);
         $this->createCategory('Instruments de Folklore ', 'fol.jpg', 'category_traditional_folk_instruments2', $parent, $manager);
         $this->createCategory('Percussions Clasiques ', 'pc.jpg', 'category_traditional_percussion_instruments3', $parent, $manager);
         $this->createCategory('Méditation & Thérapie Musicale ', 'med.jpg', 'category_traditional_meditation_instruments4', $parent, $manager);

         
         



        $parent = $this->createCategory('Instruments à Vent', 'v.jpg', 'c5', null, $manager);

         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Saxophones ', 'sax.jpg', 'category_wind_instruments1', $parent, $manager);
         $this->createCategory('Trompettes ', 'tromp.jpg', 'category_wind_instruments2', $parent, $manager);
         $this->createCategory('Trombones ', 'trom.jpg', 'category_wind_instruments3', $parent, $manager);
         $this->createCategory('Euphoniums ', 'eu.jpg','category_euphoniums4', $parent, $manager);
         



        $parent = $this->createCategory('Microphones', 'mi.jpg', 'c6', null, $manager);

         // Sous-catégories associées à la catégorie parente

         $this->createCategory('Vocal Microphones ', 'mv.jpg', 'category_vocal_microphones1', $parent, $manager);
         $this->createCategory('Wireless Microphones ', 'wm.jpg', 'category_wireless_microphones2', $parent, $manager);
         
 
        



       



        $manager->flush();
    }

    /**
     * Crée une catégorie avec un nom, une photo et un parent facultatif
     */
    public function createCategory(string $nom, string $photo, string $reference, ?Categories $parent, ObjectManager $manager): Categories
    {
        $category = new Categories();
        $category->setNom($nom);
        $category->setPhoto($photo);
        $category->setSlug($this->slugger->slug($nom)->lower());
        $category->setParent($parent);

        $manager->persist($category);

        $this->addReference($reference, $category);
        $this->counter++;



        return $category;
    }
}
