<?php

namespace TWC\ParlementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActivitesControllerTest extends WebTestCase
{
    public function testSession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/session');
    }

}
