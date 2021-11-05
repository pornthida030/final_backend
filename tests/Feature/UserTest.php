<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_addUser()
    {
        $response = $this->withHeaders('Authorization' => '')->post(
            '/api/user/',
            [
                'name' => 'test',
                'username' => 'test', 'password' => 'password'
            ]
        );
        $response->assertStatus(200);
    }

    public function test_updateUser()
    {
        $response = $this->put(
            '/api/user/{1}',
            [
                'name' => "changeName"
            ]
        );
        $response->assertStatus(200);
    }

    public function test_deleteUser()
    {
        $response = $this->delete(
            '/api/user/{1}'
        );
        $response->assertStatus(200);
    }
}
