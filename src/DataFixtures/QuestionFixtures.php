<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $questions = [

            //theme géographie
            ['intitule' => "Quel pays est traversé par l'Amazone ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quelle est le deuxième plus grand pays du monde ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel est le plus grand lac d'Afrique ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel est le plus grand pays d'Amérique du Sud ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel océan borde la côte est des États-Unis ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quelle est la montagne la plus haute du monde ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel pays est célèbre pour ses pyramides ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel est le plus grand désert du monde ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quel pays est situé à la pointe sud de l'Afrique ?", 'theme_id' => $this->getReference("theme".(0))],
            ['intitule' => "Quelle est la capitale de l'Australie ?", 'theme_id' => $this->getReference("theme".(0))],

            //theme océan
            ['intitule' => "Quel est l'océan le plus vaste de la planète ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan borde la côte est de l'Afrique ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel est le plus grand récif corallien du monde ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan se situe entre l'Australie et l'Asie ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan entoure l'Antarctique ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel est le plus profond des océans ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan borde la côte ouest des États-Unis ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan est connu pour abriter les Maldives ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan se trouve entre l'Europe et l'Amérique ?", 'theme_id' => $this->getReference("theme".(1))],
            ['intitule' => "Quel océan est bordé par la côte est de l'Amérique du Sud ?", 'theme_id' => $this->getReference("theme".(1))],

            // theme empire du monde
            ['intitule' => "Quel empire a été dirigé par Jules César ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a construit la Grande Muraille de Chine ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a été à l'origine de la Renaissance ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a été fondé par Gengis Khan ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a dominé une grande partie de l'Inde ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a conquis une grande partie de l'Amérique du Sud au 15ème siècle ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a été dirigé par Napoléon Bonaparte ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a régné sur une grande partie de l'Europe au Moyen Âge ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a été fondé par Cyrus le Grand ?", 'theme_id' => $this->getReference("theme".(2))],
            ['intitule' => "Quel empire a été à l'origine de la construction des pyramides ?", 'theme_id' => $this->getReference("theme".(2))],

            // theme grands monuments
            ['intitule' => "Quel monument est situé à Paris et est considéré comme un symbole de la France ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument antique en Grèce est dédié à la déesse Athéna ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument emblématique de l'Inde est un mausolée en marbre blanc ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument colossal en Égypte est composé de grandes pyramides ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument religieux au Vatican est connu pour sa magnifique chapelle Sixtine ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument célèbre de Rome est un amphithéâtre construit à l'époque romaine ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument emblématique de Londres est une tour horloge située près de la Tamise ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument au Brésil est une statue gigantesque représentant le Christ ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument en Chine est une ancienne muraille construite pour se protéger des invasions ?", 'theme_id' => $this->getReference("theme".(3))],
            ['intitule' => "Quel monument en Italie est une tour penchée mondialement connue ?", 'theme_id' => $this->getReference("theme".(3))],
        ];

        $i=0;
        foreach ($questions as $question){

            $fixture = new Question();
            $fixture->setIntitule($question['intitule'])
                ->setThemeId($question['theme_id'])
            ;
            $this->addReference("question".$i,$fixture);

            $manager->persist($fixture);
            // $product = new Product();
            // $manager->persist($product);

            $manager->flush();
            $i++;

        }


    }
    public function getDependencies()
    {
        return [
            ThemeFixture::class
        ];
    }
}
