<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CharacterControllerTest extends WebTestCase
{
    public function testDisplay()
    {
        $client = static::createClient();
        $client->request('GET', '/characters/df06a920b5bf8a2124def1d9d85d7860d319347c');
        $this->assertJsonResponse($client->getResponse());
    }

     // Asserts that a Response is in json
    public function assertJsonResponse($response)
    {
        $this->assertResponseIsSuccessful();
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'), $response->headers);
    }
}
