<?php

namespace App\DataFixtures;

use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createUserType($manager, 'Particulier');
        $this->createUserType($manager, 'Professionnel');
        
        $manager->flush();
    }

    private function createUserType(ObjectManager $manager, string $name): void
    {
        $userType = new UserType();
        $userType->setNom($name);
        $manager->persist($userType);
    }
}
