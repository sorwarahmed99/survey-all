<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');
 
        $response->assertStatus(200);
    }
 
    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'confirmation_password' => 'password',
        ]);
        $response->assertValid();
        $this->assertAuthenticated();
        // $response->assertRedirect(RouteServiceProvider::HOME);
    }
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');
 
        $response->assertStatus(200);
    }
 
    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();
 
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
 
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
 
    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();
 
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);
 
        $this->assertGuest();
    }
}
