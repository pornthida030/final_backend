<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Firebase\JWT\JWT;

class DiscountCouponTest extends TestCase
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

    public function test_addDiscountCoupon()
    {
        $response = $this->loginAs(1)->post(
            '/api/discount_coupon/',
            [
                'specific_code' => 'GOODTIME', 'discount_percent' => 30, 'minimum_cost' => 1000, 'quantity' => 5
            ]
        );
        $response->assertStatus(201);
    }

    public function test_updateDiscountCoupon()
    {
        $response = $this->loginAs(1)->put('/api/discount_coupon/3', [
            'quantity' => 10
        ]);

        $response->assertStatus(200);
    }

    public function test_deleteDiscountCoupon()
    {
        $response = $this->loginAs(1)->delete('/api/discount_coupon/1');

        $response->assertStatus(200);
    }
}
