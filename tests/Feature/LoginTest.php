<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
   use RefreshDatabase;
   
    public function test_login_new_user_successfully(): void
    {
        $user = User::factory()->create([
            'email' => 'user@gmail.com',
            'password' => 'secret'
        ]);

        $data =[
            'email' => 'user@gmail.com',
            'password' => 'secret'
        ];

        $response = $this->get('/login',$data);

        $response->assertStatus(200);
    }
}
