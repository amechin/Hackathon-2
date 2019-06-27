<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*for ($i = 1; $i <= 50; $i++) {
        $entity = new Entity();
        $entity->setName('blabla' . $i);
        $manager->persist($entity);
        }
        $manager->flush();*/
    }
}
