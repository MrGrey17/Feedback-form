<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function test_mail_sending()
    {
        $response = $this->post('/contact', [
            'name' => 'TestName',
            'email' => 'test@test.com'
        ]);

        $response->assertStatus(302);
    }
}
