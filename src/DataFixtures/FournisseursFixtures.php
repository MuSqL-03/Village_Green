<?php

namespace App\DataFixtures;

use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FournisseursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fournisseurs = [
            ['Fournisseur A', '123 Rue de Paris, Paris', '0102030405'],
            ['Fournisseur B', '456 Avenue de Lyon, Lyon', '0607080910'],
            ['Fournisseur C', '789 Boulevard de Marseille, Marseille', '0203040506'],
            ['Fournisseur D', '321 Place de Bordeaux, Bordeaux', '0708091011'],
            ['Fournisseur E', '654 Rue de Nantes, Nantes', '0304050607'],
            ['Fournisseur F', '987 Avenue de Lille, Lille', '0809101112'],
            ['Fournisseur G', '159 Rue de Strasbourg, Strasbourg', '0405060708'],
        ];

        foreach ($fournisseurs as $index => [$nom, $adresse, $telephone]) {
            $fournisseur = new Fournisseur();
            $fournisseur->setNom($nom);
            $fournisseur->setAdresse($adresse);
            $fournisseur->setTelephone($telephone);

            $manager->persist($fournisseur);

            // Add reference for linking with products
            $this->addReference('fournisseur_' . ($index + 1), $fournisseur);
        }

        $manager->flush();
    }
}
