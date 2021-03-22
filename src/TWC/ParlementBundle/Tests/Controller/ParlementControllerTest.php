<?php

namespace TWC\ParlementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ParlementControllerTest extends WebTestCase
{
    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testRole()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/role');
    }

    public function testComposition()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/composition');
    }

    public function testCommissions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/commissions');
    }

}
