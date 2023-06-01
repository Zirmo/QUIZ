<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ThemeFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $themes = ["géographie", "océans", "empires du monde", "grands monuments"];
        $i=0;
        foreach ($themes as $theme){

            $fixture = new Theme();
            $fixture->setLibelle($theme)
            ;

            $this->addReference("theme".$i,$fixture);

            $manager->persist($fixture);
            // $product = new Product();
            // $manager->persist($product);

            $manager->flush();
            $i++;

        }


    }
}
