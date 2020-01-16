<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use \DateTime;
use Faker;


class CommentFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        for($i = 0; $i < 25; $i++){
            $newComment = new Comment();
            $newComment
                ->setContent($faker->sentence(12))
                ->setType($faker->randomElement(['m', 's']))
                ->setItemId('75450')
                ->setPublicationDate($faker->dateTimeThisDecade($max = 'now', $timezone = 'Europe/Paris' ))
                ->setAuthor( $this->getReference('user' . $faker->numberBetween($min = 1, $max = 24)) )
                ->setItemName('test')
                ;
                $manager->persist($newComment);
        }
        $manager->flush();
    }


  public function getOrder()
  {
    return 2;
  }

}
