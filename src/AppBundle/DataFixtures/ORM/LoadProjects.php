<?php
/**
 * Created by Michał Nowacki
 * Date: 08.06.2016
 * Time: 14:32
 * Filename: LoadProjects.php
 */


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Project;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProjects extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $project1 = new Project();
        $project1->setTitle('Symfony book');
        $project1->setDescription('Some descriptions for Symfony book project');
        $project1->setDueDate(new \DateTime('2014-10-20'));
        $project1->setWorkspace($manager->merge($this->getReference('workspace-writing')));
        $manager->persist($project1);
        $manager->flush();
        $this->addReference('project-symfony', $project1);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 20;
    }

}