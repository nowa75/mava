<?php
/**
 * Created by Michał Nowacki
 * Date: 08.06.2016
 * Time: 14:23
 * Filename: LoadWorkspaces.php
 */


namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\Workspace;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWorkspaces extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workspace1= new Workspace();
        $workspace1->setTitle('Writing');
        $workspace1->setDescription('info for writing Workspace');
        $manager->persist($workspace1);
        $manager->flush();
        $this->addReference('workspace-writing', $workspace1);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}