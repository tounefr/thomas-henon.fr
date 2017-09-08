<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories = ['Développement', 'DevOps', 'Astuces'];

        foreach ($categories as $category) {
            $entity = new Category();
            $entity->setName($category);
            $manager->persist($entity);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}