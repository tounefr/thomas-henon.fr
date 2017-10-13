<?php
namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    private $container;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();
    }

    public function testAboutPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
    }
}