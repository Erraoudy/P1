<?php

namespace TWC\VilleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testFormulaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/formulaire');
    }

    public function testTelfax()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/telfax');
    }

}
