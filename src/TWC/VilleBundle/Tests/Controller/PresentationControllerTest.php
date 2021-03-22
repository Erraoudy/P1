<?php

namespace TWC\VilleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PresentationControllerTest extends WebTestCase
{
    public function testDiscours()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/discours');
    }

    public function testPhenomene()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/phenomene');
    }

    public function testRole()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/role');
    }

}
