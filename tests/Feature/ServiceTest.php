<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

use Firebase\JWT\JWT;

class ServiceTest extends TestCase
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

    public function test_addService()
    {
        $file = new UploadedFile(resource_path('test_image/hair-washhair.jpg'), 'hair-washhair.jpg');
        $response = $this->loginAs(1)->post(
            '/api/service/',
            [
                'type_id' => 1, 'name' => 'test_service_name' , 'description' => 'test',
                'service_image_url' => $file
            ]
        );
        $response->assertStatus(200);
    }

    public function test_updateService()
    {
        $response = $this->loginAs(1)->put('/api/service/2', [
            'name' => 'changeName'
        ]);

        $response->assertStatus(200);
    }

    public function test_deleteService()
    {
        $response = $this->loginAs(1)->delete('/api/service/3');

        $response->assertStatus(200);
    }
}
