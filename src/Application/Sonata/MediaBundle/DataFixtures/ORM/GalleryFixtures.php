<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jean-françois
 * Date: 19/12/12
 * Time: 16:36
 * To change this template use File | Settings | File Templates.
 */
namespace Application\Sonata\UserBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Sonata\MediaBundle\Entity\Gallery;

class GalleryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $locations = $manager->getRepository("LocationBundle:Location")->findAll();

        foreach($locations as $location)
        {
            $g = new Gallery();
            $g->setContext('locations');
            $g->setDefaultFormat("locations_full");
            $g->setEnabled(true);
            $g->setName($location->getName());

            $location->setGallery($g);

            $manager->persist($g);

        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 4;
    }
}
