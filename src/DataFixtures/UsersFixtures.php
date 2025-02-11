<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger
    ){}

    public function load(ObjectManager $manager): void
    {
        $admin = new Users();
        $admin->setEmail('musadaqmohamedabshir@gmail.com');
        $admin->setNom('Mohamed');
        $admin->setPrenom('Musadaq');
        $admin->setAdresse('30 rue Henri Dunant');
        $admin->setCodepostal('51000');
        $admin->setVille('Chalon-en-Champagne');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);

        $admin = new Users();
        $admin->setEmail('ali@bunzi.fr');
        $admin->setNom('Nkuedila');
        $admin->setPrenom('Ali');
        $admin->setAdresse('36 rue emile francfort');
        $admin->setCodepostal('80000');
        $admin->setVille('Amiens');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'bunzi')
        );
        $admin->setRoles(['ROLE_COMMERCIAL']);

        $manager->persist($admin);


        $admin = new Users();
        $admin->setEmail('plouf@demo.fr');
        $admin->setNom('Plouf');
        $admin->setPrenom('Bob');
        $admin->setAdresse('12 rue du post');
        $admin->setCodepostal('75001');
        $admin->setVille('Paris');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'plouf')
        );
        $admin->setRoles(['ROLE_CLIENT_PARTICULIER']);

        $manager->persist($admin);



        $admin = new Users();
        $admin->setEmail('musql@gmail.com');
        $admin->setNom('Momo');
        $admin->setPrenom('Musql');
        $admin->setAdresse('8 rue de schmit');
        $admin->setCodepostal('75001');
        $admin->setVille('Paris');
        $admin->setNumeroSiret('12345');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'momo')
        );
        $admin->setRoles(['ROLE_CLIENT_PROFESSIONEL']);

        $manager->persist($admin);



       

        $manager->flush();
    }
}