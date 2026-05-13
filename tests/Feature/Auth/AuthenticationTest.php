<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Features;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    // Gunakan konstanta atau env variable, bukan hardcode string
    private string $validPassword = 'Va1!dP@ssw0rd#Test';
    private string $invalidPassword = 'Wr0ng!P@ssw0rd#Test';

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->withoutTwoFactor()->create([
            'password' => Hash::make($this->validPassword), // bcrypt by default
        ]);

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => $this->validPassword,
        ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticated();
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make($this->validPassword),
        ]);

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => $this->invalidPassword,
        ]);

        $response->assertSessionHasErrorsIn('email');

        $this->assertGuest();
    }

    public function test_users_with_two_factor_enabled_are_redirected_to_two_factor_challenge(): void
    {
        if (! Features::canManageTwoFactorAuthentication()) {
            $this->markTestSkipped('Two-factor authentication is not enabled.');
        }

        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,
        ]);

        $user = User::factory()->create([
            'password' => Hash::make($this->validPassword),
        ]);

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => $this->validPassword,
        ]);

        $response->assertRedirect(route('two-factor.login'));
        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout'));

        $response->assertRedirect(route('home'));
        $this->assertGuest();
    }
}