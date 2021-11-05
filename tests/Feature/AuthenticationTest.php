<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    public function test_login()
    {
        $response = $this->post(
            '/api/auth/login',
            ['username' => 'admin1', 'password' => 'password']
        );
        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->post(
            '/api/auth/register',
            [   'name' => 'test',
                'username' => 'test', 'password' => 'password']
        );
        $response->assertStatus(200);
    }
}
