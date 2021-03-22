<?php

namespace TWC\ParlementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CapeControllerTest extends WebTestCase
{
    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testReseau()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reseau');
    }

}
