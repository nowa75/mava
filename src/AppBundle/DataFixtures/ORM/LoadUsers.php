<?php
// mava/src/AppBundle/DataFixtures/ORM/LoadUsers.php
/**
 * Created by Michał Nowacki
 * Date: 03.06.2016
 * Time: 11:19
 * Filename: LoadUsers.php
 */


namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsers implements FixtureInterface
{

    function __construct()
    {

    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('John');
        $user1->setBio('He is a cool guy');
        $user1->setEmail('john@mava.info');
        $manager->persist($user1);
        $user2 = new User();
        $user2->setName('Jack');
        $user2->setBio('He is a cool guy too');
        $user2->setEmail('jack@mava.info');
        $manager->persist($user2);
        $manager->flush();
    }
}