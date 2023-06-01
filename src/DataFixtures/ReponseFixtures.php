<?php

namespace App\DataFixtures;

use App\Entity\Reponse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ReponseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $reponses = [

            // theme geographie
            ['intitule' => "le Pérou ",'is_correct' => true, 'question_id' => $this->getReference("question".(0))],
            ['intitule' => "l'Argentine ",'is_correct' => false, 'question_id' => $this->getReference("question".(0))],
            ['intitule' => "le Chili ",'is_correct' => false, 'question_id' => $this->getReference("question".(0))],
            ['intitule' => "le Suriname ",'is_correct' => false, 'question_id' => $this->getReference("question".(0))],

            ['intitule' => "Canada", 'is_correct' => true, 'question_id' => $this->getReference("question".(1))],
            ['intitule' => "Russie", 'is_correct' => false, 'question_id' => $this->getReference("question".(1))],
            ['intitule' => "Chine", 'is_correct' => false, 'question_id' => $this->getReference("question".(1))],
            ['intitule' => "Inde", 'is_correct' => false, 'question_id' => $this->getReference("question".(1))],

            ['intitule' => "lac Supérieur", 'is_correct' => false, 'question_id' => $this->getReference("question".(2))],
            ['intitule' => "lac Baïkal", 'is_correct' => false, 'question_id' => $this->getReference("question".(2))],
            ['intitule' => "lac Victoria", 'is_correct' => true, 'question_id' => $this->getReference("question".(2))],
            ['intitule' => "lac Tanganyika", 'is_correct' => false, 'question_id' => $this->getReference("question".(2))],

            ['intitule' => "Argentine", 'is_correct' => false, 'question_id' => $this->getReference("question".(3))],
            ['intitule' => "Brésil", 'is_correct' => true, 'question_id' => $this->getReference("question".(3))],
            ['intitule' => "Chili", 'is_correct' => false, 'question_id' => $this->getReference("question".(3))],
            ['intitule' => "Pérou", 'is_correct' => false, 'question_id' => $this->getReference("question".(3))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(4))],
            ['intitule' => "Océan Atlantique", 'is_correct' => true, 'question_id' => $this->getReference("question".(4))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(4))],
            ['intitule' => "Mer Méditerranée", 'is_correct' => false, 'question_id' => $this->getReference("question".(4))],

            ['intitule' => "Kilimandjaro", 'is_correct' => false, 'question_id' => $this->getReference("question".(5))],
            ['intitule' => "Mont Fuji", 'is_correct' => false, 'question_id' => $this->getReference("question".(5))],
            ['intitule' => "Mont Everest", 'is_correct' => true, 'question_id' => $this->getReference("question".(5))],
            ['intitule' => "Mont McKinley", 'is_correct' => false, 'question_id' => $this->getReference("question".(5))],

            ['intitule' => "Égypte", 'is_correct' => true, 'question_id' => $this->getReference("question".(6))],
            ['intitule' => "Mexique", 'is_correct' => false, 'question_id' => $this->getReference("question".(6))],
            ['intitule' => "Soudan", 'is_correct' => false, 'question_id' => $this->getReference("question".(6))],
            ['intitule' => "Grèce", 'is_correct' => false, 'question_id' => $this->getReference("question".(6))],

            ['intitule' => "Le Sahara", 'is_correct' => true, 'question_id' => $this->getReference("question".(7))],
            ['intitule' => "Le Kalahari", 'is_correct' => false, 'question_id' => $this->getReference("question".(7))],
            ['intitule' => "Le Gobi", 'is_correct' => false, 'question_id' => $this->getReference("question".(7))],
            ['intitule' => "Le Nullarbor", 'is_correct' => false, 'question_id' => $this->getReference("question".(7))],

            ['intitule' => "Namibie", 'is_correct' => false, 'question_id' => $this->getReference("question".(8))],
            ['intitule' => "Madagascar", 'is_correct' => false, 'question_id' => $this->getReference("question".(8))],
            ['intitule' => "Tanzanie", 'is_correct' => false, 'question_id' => $this->getReference("question".(8))],
            ['intitule' => "Afrique du Sud", 'is_correct' => true, 'question_id' => $this->getReference("question".(8))],

            ['intitule' => "Sydney", 'is_correct' => false, 'question_id' => $this->getReference("question".(9))],
            ['intitule' => "Melbourne", 'is_correct' => false, 'question_id' => $this->getReference("question".(9))],
            ['intitule' => "Adélaïde", 'is_correct' => false, 'question_id' => $this->getReference("question".(9))],
            ['intitule' => "Canberra", 'is_correct' => true, 'question_id' => $this->getReference("question".(9))],

            // theme les océans

            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(10))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(10))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(10))],
            ['intitule' => "Océan Pacifique", 'is_correct' => true, 'question_id' => $this->getReference("question".(10))],

            ['intitule' => "Océan Indien", 'is_correct' => true, 'question_id' => $this->getReference("question".(11))],
            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(11))],
            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(11))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(11))],

            ['intitule' => "Récif de Tubbataha", 'is_correct' => false, 'question_id' => $this->getReference("question".(12))],
            ['intitule' => "Grande Barrière de Corail", 'is_correct' => true, 'question_id' => $this->getReference("question".(12))],
            ['intitule' => "Récif de Palau", 'is_correct' => false, 'question_id' => $this->getReference("question".(12))],
            ['intitule' => "Récif de Belize", 'is_correct' => false, 'question_id' => $this->getReference("question".(12))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(13))],
            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(13))],
            ['intitule' => "Océan Indien", 'is_correct' => true, 'question_id' => $this->getReference("question".(13))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(13))],

            ['intitule' => "Océan Austral", 'is_correct' => true, 'question_id' => $this->getReference("question".(14))],
            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(14))],
            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(14))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(14))],

            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(15))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(15))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(15))],
            ['intitule' => "Océan Pacifique", 'is_correct' => true, 'question_id' => $this->getReference("question".(15))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(16))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(16))],
            ['intitule' => "Océan Atlantique", 'is_correct' => true, 'question_id' => $this->getReference("question".(16))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(16))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(17))],
            ['intitule' => "Océan Indien", 'is_correct' => true, 'question_id' => $this->getReference("question".(17))],
            ['intitule' => "Océan Atlantique", 'is_correct' => false, 'question_id' => $this->getReference("question".(17))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(17))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(18))],
            ['intitule' => "Océan Atlantique", 'is_correct' => true, 'question_id' => $this->getReference("question".(18))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(18))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(18))],

            ['intitule' => "Océan Pacifique", 'is_correct' => false, 'question_id' => $this->getReference("question".(19))],
            ['intitule' => "Océan Atlantique", 'is_correct' => true, 'question_id' => $this->getReference("question".(19))],
            ['intitule' => "Océan Indien", 'is_correct' => false, 'question_id' => $this->getReference("question".(19))],
            ['intitule' => "Océan Arctique", 'is_correct' => false, 'question_id' => $this->getReference("question".(19))],

            // theme empire du monde

            ['intitule' => "Empire romain", 'is_correct' => true, 'question_id' => $this->getReference("question".(20))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(20))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(20))],
            ['intitule' => "Empire mongol", 'is_correct' => false, 'question_id' => $this->getReference("question".(20))],

            ['intitule' => "Empire chinois", 'is_correct' => true, 'question_id' => $this->getReference("question".(21))],
            ['intitule' => "Empire perse", 'is_correct' => false, 'question_id' => $this->getReference("question".(21))],
            ['intitule' => "Empire maurya", 'is_correct' => false, 'question_id' => $this->getReference("question".(21))],
            ['intitule' => "Empire inca", 'is_correct' => false, 'question_id' => $this->getReference("question".(21))],

            ['intitule' => "Empire carolingien", 'is_correct' => true, 'question_id' => $this->getReference("question".(22))],
            ['intitule' => "Empire romain", 'is_correct' => false, 'question_id' => $this->getReference("question".(22))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(22))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(22))],

            ['intitule' => "Empire mongol", 'is_correct' => true, 'question_id' => $this->getReference("question".(23))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(23))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(23))],
            ['intitule' => "Empire romain", 'is_correct' => false, 'question_id' => $this->getReference("question".(23))],

            ['intitule' => "Empire moghol", 'is_correct' => true, 'question_id' => $this->getReference("question".(24))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(24))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(24))],
            ['intitule' => "Empire romain", 'is_correct' => false, 'question_id' => $this->getReference("question".(24))],


            ['intitule' => "Empire inca", 'is_correct' => true, 'question_id' => $this->getReference("question".(25))],
            ['intitule' => "Empire aztèque", 'is_correct' => false, 'question_id' => $this->getReference("question".(25))],
            ['intitule' => "Empire maya", 'is_correct' => false, 'question_id' => $this->getReference("question".(25))],
            ['intitule' => "Empire moghol", 'is_correct' => false, 'question_id' => $this->getReference("question".(25))],

            ['intitule' => "Empire français", 'is_correct' => true, 'question_id' => $this->getReference("question".(26))],
            ['intitule' => "Empire britannique", 'is_correct' => false, 'question_id' => $this->getReference("question".(26))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(26))],
            ['intitule' => "Empire romain", 'is_correct' => false, 'question_id' => $this->getReference("question".(26))],

            ['intitule' => "Saint-Empire romain germanique", 'is_correct' => true, 'question_id' => $this->getReference("question".(27))],
            ['intitule' => "Empire carolingien", 'is_correct' => false, 'question_id' => $this->getReference("question".(27))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(27))],
            ['intitule' => "Empire ottoman", 'is_correct' => false, 'question_id' => $this->getReference("question".(27))],

            ['intitule' => "Empire perse", 'is_correct' => true, 'question_id' => $this->getReference("question".(28))],
            ['intitule' => "Empire babylonien", 'is_correct' => false, 'question_id' => $this->getReference("question".(28))],
            ['intitule' => "Empire romain", 'is_correct' => false, 'question_id' => $this->getReference("question".(28))],
            ['intitule' => "Empire byzantin", 'is_correct' => false, 'question_id' => $this->getReference("question".(28))],

            ['intitule' => "Ancien empire égyptien", 'is_correct' => true, 'question_id' => $this->getReference("question".(29))],
            ['intitule' => "Empire inca", 'is_correct' => false, 'question_id' => $this->getReference("question".(29))],
            ['intitule' => "Empire maya", 'is_correct' => false, 'question_id' => $this->getReference("question".(29))],
            ['intitule' => "Empire moghol", 'is_correct' => false, 'question_id' => $this->getReference("question".(29))],

            // theme monuments

            ['intitule' => "Arc de Triomphe", 'is_correct' => false, 'question_id' => $this->getReference("question".(30))],
            ['intitule' => "Cathédrale Notre-Dame de Paris", 'is_correct' => false, 'question_id' => $this->getReference("question".(30))],
            ['intitule' => "Tour Eiffel", 'is_correct' => true, 'question_id' => $this->getReference("question".(30))],
            ['intitule' => "Palais du Louvre", 'is_correct' => false, 'question_id' => $this->getReference("question".(30))],

            ['intitule' => "Colisée", 'is_correct' => false, 'question_id' => $this->getReference("question".(31))],
            ['intitule' => "Parthénon", 'is_correct' => true, 'question_id' => $this->getReference("question".(31))],
            ['intitule' => "Temple d'Artémis", 'is_correct' => false, 'question_id' => $this->getReference("question".(31))],
            ['intitule' => "Pyramides de Gizeh", 'is_correct' => false, 'question_id' => $this->getReference("question".(31))],

            ['intitule' => "Taj Mahal", 'is_correct' => true, 'question_id' => $this->getReference("question".(32))],
            ['intitule' => "Acropole d'Athènes", 'is_correct' => false, 'question_id' => $this->getReference("question".(32))],
            ['intitule' => "Grande Muraille de Chine", 'is_correct' => false, 'question_id' => $this->getReference("question".(32))],
            ['intitule' => "Tour de Pise", 'is_correct' => false, 'question_id' => $this->getReference("question".(32))],

            ['intitule' => "Grande Muraille de Chine", 'is_correct' => false, 'question_id' => $this->getReference("question".(33))],
            ['intitule' => "Colisée", 'is_correct' => false, 'question_id' => $this->getReference("question".(33))],
            ['intitule' => "Statue de la Liberté", 'is_correct' => false, 'question_id' => $this->getReference("question".(33))],
            ['intitule' => "Pyramides de Gizeh", 'is_correct' => true, 'question_id' => $this->getReference("question".(33))],

            ['intitule' => "Basilique Saint-Pierre", 'is_correct' => true, 'question_id' => $this->getReference("question".(34))],
            ['intitule' => "Cathédrale Saint-Paul", 'is_correct' => false, 'question_id' => $this->getReference("question".(34))],
            ['intitule' => "Cathédrale de Milan", 'is_correct' => false, 'question_id' => $this->getReference("question".(34))],
            ['intitule' => "Cathédrale de Cologne", 'is_correct' => false, 'question_id' => $this->getReference("question".(34))],

            ['intitule' => "Colisée", 'is_correct' => true, 'question_id' => $this->getReference("question".(35))],
            ['intitule' => "Tour de Londres", 'is_correct' => false, 'question_id' => $this->getReference("question".(35))],
            ['intitule' => "Big Ben", 'is_correct' => false, 'question_id' => $this->getReference("question".(35))],
            ['intitule' => "Château de Versailles", 'is_correct' => false, 'question_id' => $this->getReference("question".(35))],

            ['intitule' => "Tour de Londres", 'is_correct' => false, 'question_id' => $this->getReference("question".(36))],
            ['intitule' => "Big Ben", 'is_correct' => true, 'question_id' => $this->getReference("question".(36))],
            ['intitule' => "Palais de Buckingham", 'is_correct' => false, 'question_id' => $this->getReference("question".(36))],
            ['intitule' => "Tower Bridge", 'is_correct' => false, 'question_id' => $this->getReference("question".(36))],

            ['intitule' => "Tour de Pise", 'is_correct' => false, 'question_id' => $this->getReference("question".(37))],
            ['intitule' => "Pyramides de Gizeh", 'is_correct' => false, 'question_id' => $this->getReference("question".(37))],
            ['intitule' => "Christ Rédempteur", 'is_correct' => true, 'question_id' => $this->getReference("question".(37))],
            ['intitule' => "Statue de la Liberté", 'is_correct' => false, 'question_id' => $this->getReference("question".(37))],

            ['intitule' => "Grande Muraille de Chine", 'is_correct' => true, 'question_id' => $this->getReference("question".(38))],
            ['intitule' => "Colisée", 'is_correct' => false, 'question_id' => $this->getReference("question".(38))],
            ['intitule' => "Taj Mahal", 'is_correct' => false, 'question_id' => $this->getReference("question".(38))],
            ['intitule' => "Acropole d'Athènes", 'is_correct' => false, 'question_id' => $this->getReference("question".(38))],

            ['intitule' => "Cathédrale de Cologne", 'is_correct' => false, 'question_id' => $this->getReference("question".(39))],
            ['intitule' => "Tour de Pise", 'is_correct' => true, 'question_id' => $this->getReference("question".(39))],
            ['intitule' => "Tour Eiffel", 'is_correct' => false, 'question_id' => $this->getReference("question".(39))],
            ['intitule' => "Colisée", 'is_correct' => false, 'question_id' => $this->getReference("question".(39))],


            ];


        foreach ($reponses as $reponse) {

            $fixture = new Reponse();
            $fixture->setIntitule($reponse['intitule'])
                ->setIsCorrect($reponse['is_correct'])
                ->setQuestionId($reponse['question_id']);

            $manager->persist($fixture);

            $manager->flush();

        }
    }
    public function getDependencies()
    {
        return [
            QuestionFixtures::class
        ];
    }
}
