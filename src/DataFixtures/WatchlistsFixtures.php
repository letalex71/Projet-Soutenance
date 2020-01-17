<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Comments;
use App\Entity\Watchlist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use \DateTime;
use Faker;

class WatchlistsFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        for($i = 0; $i < 2000; $i++){
            $newWatchlist = new Watchlist();
            $newWatchlist
        ->setUser( $this->getReference('user' . $faker->numberBetween($min = 1, $max = 24)) )
        ->setScore($faker->numberBetween($min = 0, $max = 10) * 10)
        ->setType($faker->randomElement(['m', 's']))
        ->setStatus($faker->randomElement(['plan to watch', 'completed', 'dropped']))
        ->setItemId($faker->randomNumber($nbDigits = 6, $strict = false))
        ->setStatus($faker->randomElement(['p', 'c', 'd']))
        ->setTitle('test')
        ->setPosterPath(md5((string)$faker->randomNumber(6)))
        ;
        $manager->persist($newWatchlist);
    }

    $manager->flush();
}

public function getOrder(){
    return 3;
}
}
