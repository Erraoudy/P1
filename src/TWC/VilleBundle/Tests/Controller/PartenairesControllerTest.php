<?php

namespace TWC\VilleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenairesControllerTest extends WebTestCase
{
    public function testUnicef()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/unicef');
    }

    public function testGouvernement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gouvernement');
    }

    public function testCglu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cglu');
    }

    public function testAdherentes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/adherentes');
    }

}
