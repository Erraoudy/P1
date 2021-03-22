<?php

namespace TWC\CongresBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PresentationControllerTest extends WebTestCase
{
    public function testMessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/message');
    }

}
