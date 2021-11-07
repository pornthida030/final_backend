<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

use Firebase\JWT\JWT;

class TypeTest extends TestCase

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

    public function test_addType()
    {
        $file = new UploadedFile(resource_path('test_image/icon-botox.png'), 'icon-botox.png');
        $response = $this->loginAs(1)->post(
            '/api/type/',
            [
                'name' => 'test_type',
                'type_image_url' => $file
            ]
        );
        $response->assertStatus(200);
    }

    public function test_updateType()
    {
        $response = $this->loginAs(1)->put('/api/type/2', [
            'name' => 'changeName'
        ]);

        $response->assertStatus(200);
    }

    public function test_deleteType()
    {
        $response = $this->loginAs(1)->delete('/api/type/3');

        $response->assertStatus(200);
    }
}
