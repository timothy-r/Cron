<?php namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jobs');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($crawler->filter('html:contains("Jobs")')->count() > 0);
    }

    public function testGetMissingJobFails()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jobs/999');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testGetJobSuccess()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jobs/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }
}
