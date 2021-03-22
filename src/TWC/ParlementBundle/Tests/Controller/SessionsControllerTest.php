<?php

namespace TWC\ParlementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SessionsControllerTest extends WebTestCase
{
    public function testRegional()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/regional');
    }

    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testActivites()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/activites');
    }

    public function testSessions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sessions');
    }

    public function testNational()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/national');
    }

}
