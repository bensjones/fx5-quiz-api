<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class QuestionApiTest extends TestCase
{
    public function testGetResponse()
    {
        $response = $this->call('GET', '/api/questions', []);
        $questions = $response->json();
        $this->assertEquals(200, $response->status());
        $this->assertEquals(5, count($questions));
    }
}
