<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Article;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $nb_articles = 5;

        $user = $manager->getRepository('AppBundle:User')->findOneByUsername('admin');
        $categories = $manager->getRepository('AppBundle:Category')->findAll();

        for ($i = 0; $i < $nb_articles; $i++) {
            $article = new Article();

            $article->setTitle('Lorem ipsum dolor sit amet ' . $i);
            $slug = $this->container->get('cocur_slugify')->slugify($article->getTitle());
            $article->setSlug($slug);
            $article->setDate(new \DateTime());
            $article->setUser($user);
            $article->setCategory($categories[array_rand($categories)]);
            $article->setContent('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam');

            $manager->persist($article);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}