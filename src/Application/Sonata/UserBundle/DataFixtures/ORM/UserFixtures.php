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
use Application\Sonata\UserBundle\Entity\User;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param Doctrine\Common\Persistence\ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $user  = new User();
        $user
            ->setUsername('pepe')
            ->setPlainPassword('123')
            ->setEmail('ibrael.avalanch@gmail.com')
            ->setSuperAdmin(true)
            ->setEnabled(true)
            ->setRoles(array('ROLE_SUPER_ADMIN'));

        $manager->persist($user);

        $u = new User();
        $u
            ->setUsername('test')
            ->setEmail('ibraelillo@hotmail.com')
            ->setPlainPassword('aze');
        $manager->persist($u);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}
