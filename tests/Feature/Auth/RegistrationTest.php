<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


        /**
     * @dataProvider userDataProvider
     */
    // what we are stress testing
    public function test_new_users_can_register($name, $email, $role, $password): void
    {
        $response = $this->post('/register', [
            'name' => $name,
            'email' => $email,
            'role' => $role,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'email' => $email,
            'role' => $role,
        ]);
    }

    
    public function test_new_users_can_register_as_admin(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);
    }

    public static function userDataProvider(): array
    {
        $users = [];

        // stress test registration ammount
        for ($i = 1; $i <= 5000; $i++) {
            $users[] = [
                'Test User ' . $i,
                'test' . $i . '@example.com',
                $i % 2 === 0 ? 'admin' : 'user',
                'password',
            ];
        }

        return $users;
    }
}
