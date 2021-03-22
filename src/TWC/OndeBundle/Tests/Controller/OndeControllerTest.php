<?php

namespace TWC\OndeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OndeControllerTest extends WebTestCase
{
    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testMissions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/missions');
    }

    public function testRealisations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/realisations');
    }

    public function testHistorique()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/historique');
    }

}
