<?php

namespace TWC\EnfantsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TelechargementControllerTest extends WebTestCase
{
    public function testFormulaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/formulaire');
    }

    public function testBrochure()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/brochure');
    }

    public function testConvention()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/convention');
    }

}
