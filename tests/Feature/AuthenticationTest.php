<?php

namespace Tests\Feature;

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ViewHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /*public function testUserCanViewALoginForm() {
        $response = $this->get(route('login'));
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function testUserCannotViewALoginFormWhenAuthenticated() {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get(route('login'));
        $response->assertRedirect(route('home'));
    }

    public function testUserCannotLogoutWhenNotAuthenticated()
    {
        $response = $this->post(route('logout'));
        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function testUserCanLogout()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post(route('logout'));
        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function testUserCannotLoginWithEmailThatDoesNotExist()
    {
        $response = $this->from(route('login'))->post(route('login'), [
            'email' => 'mr.nobody@gmail.com',
            'password' => 'invalid-password',
        ]);
        $response->assertRedirect(route('login'));
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function testRememberMeFunctionality()
    {
        $user = factory(User::class)->create([
            'id' => random_int(1, 100),
            'password' => Hash::make($password = 'notSoStrongPassword'),
        ]);
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $password,
            'remember' => 'on',
        ]);
        $response->assertRedirect(route('home'));
        $response->assertCookie(Auth::guard()->getRecallerName(), vsprintf('%s|%s|%s', [
            $user->id,
            $user->getRememberToken(),
            $user->password,
        ]));
        $this->assertAuthenticatedAs($user);
    }*/

    /*public function test_login_screen_can_be_rendered()
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
    }*/
}
