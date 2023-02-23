<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class registerTest extends TestCase
{
    use RefreshDatabase;

    private User $manager;
    private User $editor;
    private User $reviewer;
    private User $author;

    protected function setUp(): void
    {
        parent::setUp();

        $this->manager = $this->createUser(type: 1);
        $this->editor = $this->createUser(type: 2);
        $this->reviewer = $this->createUser(type: 3);
        $this->author = $this->createUser(type: 4);
    }

    private function createUser($type)
    {
        return User::factory()->create([
            'role_id' => $type,
        ]);
    }

    public function test_navigate_registertion_page_return_a_successful_response(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_register_new_user_successfully()
    {
        $user = [
            'name' => 'muhamed',
            'email' => 'muhamed@gmail.com',
            'password' => '123321123',
            'password_confirmation' => '123321123',
        ];

        $response = $this->post('/register',$user);

        $response->assertStatus(302);

    }
    
    public function test_register_new_user_with_invalid_email_return_error_respons()
    {
        User::factory()->create([
            'email' => 'user@gmail.com'
        ]);

        $user = [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post('/register',$user);

        $response
            ->assertSessionHasErrors([
                'email' => 'The email has already been taken.'
            ])
            ->assertStatus(302);
    }

    public function test_register_new_user_with_invalid_name_return_error_respons()
    {
        $user = [
            'name' => 123,
            'email' => 'user@gmail.com',
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post('/register',$user);

        $response
            ->assertSessionHasErrors([
                'name' => 'The name field must be a string.'
            ])
            ->assertStatus(302);
    }

    public function test_register_new_user_with_invalid_password_return_error_respons()
    {
        $user = [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'secret',
            'password_confirmation' => 'secret123123',
        ];

        $response = $this->post('/register',$user);

        $response
            ->assertSessionHasErrors([
                'password' => 'The password field confirmation does not match.'
            ])
            ->assertStatus(302);
    }
}
