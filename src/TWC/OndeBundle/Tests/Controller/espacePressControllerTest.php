<?php

namespace TWC\OndeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class espacePressControllerTest extends WebTestCase
{
    public function testDocumentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/documentation');
    }

    public function testContacts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');
    }

}
