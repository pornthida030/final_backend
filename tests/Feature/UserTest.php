<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Firebase\JWT\JWT;

class UserTest extends TestCase
{
    use WithFaker;

    
    public function loginAs($id){
        $payload = [
            'iss' => "gowasabi-jwt", // Issuer of the token
            'sub' => $id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + env('JWT_EXPIRE_HOUR') * 60 * 60, // Expiration time
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'));
        $this->withHeader('Authorization', "{$token}");

        return $this;
    }

    public function test_addUser()
    {
        $response = $this->loginAs(1)->post(
            '/api/user/',
            [
                'name' => 'test', 'role' => 'USER',
                'username' => 'test3432443243', 'password' => 'password'
            ]
        );
        $response->assertStatus(200);
    }

    public function test_updateUser()
    {
        $response = $this->loginAs(1)->put(
            '/api/user/4',
            [
                'name' => "changeName"
                ,'role' => "USER"
            ]
        );
        $response->assertStatus(200);
    }

    public function test_deleteUser()
    {
        $response = $this->loginAs(1)->delete(
            '/api/user/5'
        );
        $response->assertStatus(200);
    }
}
