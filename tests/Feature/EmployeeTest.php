<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Firebase\JWT\JWT;

class EmployeeTest extends TestCase
{

    use WithFaker;

    public function loginAs($id)
    {
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

    public function test_addEmployeeToType()
    {
        $response = $this->loginAs(1)->post(
            '/api/employee/',
            [
             'type_id' => 1, 'username' => 'employee1'   
            ]
        );
        $response->assertStatus(200);
    }

    public function test_removeEmployeeFromType()
    {
        $response = $this->loginAs(1)->delete('/api/employee/8');

        $response->assertStatus(200);
    }

}
