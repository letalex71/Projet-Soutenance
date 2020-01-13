<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Faker;


class UserFixtures extends Fixture implements OrderedFixtureInterface
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        // Creation de 5 users
        for($i = 0; $i < 25; $i++){
            $newUser = new User();
            $newUser
                ->setEmail( $faker->email )
                ->setPassword($this->passwordEncoder->encodePassword($newUser, 'azerty') )
            ;
            if($i == 0){

                $newUser->setRoles(['ROLE_ADMIN']);
            }
            $this->addReference('user' . $i, $newUser);
            $manager->persist($newUser);
        }
        $manager->flush();
    }

    /**
  * Get the order of this fixture
  * @return integer
  */
  public function getOrder()
  {
    return 1;
  }

}

