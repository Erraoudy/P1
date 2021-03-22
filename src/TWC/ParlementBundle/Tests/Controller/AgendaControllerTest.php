<?php

namespace TWC\ParlementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AgendaControllerTest extends WebTestCase
{
    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testPriorites()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/priorites');
    }

    public function testAgenda()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/agenda');
    }

}
