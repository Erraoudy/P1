<?php

namespace TWC\VilleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MissionsControllerTest extends WebTestCase
{
    public function testMissions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/missions');
    }

    public function testObjectifs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/objectifs');
    }

}
