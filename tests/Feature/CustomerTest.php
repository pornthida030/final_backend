<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Firebase\JWT\JWT;

class CustomerTest extends TestCase
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

    public function test_changePassword()
    {
        $response = $this->loginAs(3)->put(
            '/api/user/me',
            [
                'oldpassword' => 'password', 'newpassword' => 'newpassword'
            ]
        );
        $response->assertStatus(200);
    }

    public function test_review()
    {
        $response = $this->loginAs(3)->post('/api/review/', [
            'service_id' => 3, 'coupon_id' => 6, 'user_id' => 3, 'user_coupon_id' => 1,'score' => 5, 'review_detail' => 'review coupon'        ]);

        $response->assertStatus(201);
    }


}
