<?php

namespace TWC\CongresBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testTelfax()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/telfax');
    }

}
