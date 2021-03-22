<?php

namespace TWC\OndeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActionsControllerTest extends WebTestCase
{
    public function testProtection()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/protection');
    }

    public function testParticipation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/participation');
    }

    public function testSante()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sante');
    }

    public function testObservatoire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/observatoire');
    }

    public function testCnde()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cnde');
    }

    public function testCampagne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/campagne');
    }

}
