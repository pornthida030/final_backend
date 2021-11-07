<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Firebase\JWT\JWT;
class CouponTest extends TestCase
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

    public function test_addCoupon()
    {
        $response = $this->loginAs(1)->post(
            '/api/coupon/',
            [
                'type_id' => 1,'service_id' => 1, 'name' => 'test_coupon_name' , 'price' => 1000.0, 'time' => 60,
            ]
        );
        $response->assertStatus(201);
    }

    public function test_updateCoupon()
    {
        $response = $this->loginAs(1)->put('/api/coupon/2', [
            'name' => 'changeName'
        ]);

        $response->assertStatus(200);
    }

    public function test_deleteCoupon()
    {
        $response = $this->loginAs(1)->delete('/api/coupon/3');

        $response->assertStatus(200);
    }
}
