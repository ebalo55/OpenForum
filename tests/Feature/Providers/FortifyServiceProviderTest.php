<?php

namespace Tests\Feature\Providers;

use App\Service\UserService;
use Illuminate\Support\Facades\Event;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Contracts\TwoFactorAuthenticationProvider;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class FortifyServiceProviderTest extends TestCase {
    public
    function test_hitting_the_default_2fa_rate_limit_stops_responses() {
        Event::fake();
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );

        $user->email_verified_at = now();
        $user->save();

        // enable 2fa on the user
        (new EnableTwoFactorAuthentication(app(TwoFactorAuthenticationProvider::class)))($user);
        $user->two_factor_confirmed_at = now();
        $user->save();

        $this->assertTrue($user->hasEnabledTwoFactorAuthentication());

        // hit the 3 request per minute limit
        for ($i = 0; $i < 3; $i++) {
            $response = $this->withSession(["login" => ["id" => $user->id]])->postJson(
                "/two-factor-challenge",
                ["code" => "000000"],
            );
            $response->assertStatus(422);
        }

        $response = $this->withSession(["login" => ["id" => $user->id]])->postJson(
            "/two-factor-challenge",
            ["code" => "000000"],
        );
        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
    }

    public
    function test_hitting_the_default_2fa_rate_limit_with_recovery_codes_stops_responses() {
        Event::fake();
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );

        $user->email_verified_at = now();
        $user->save();

        // enable 2fa on the user
        (new EnableTwoFactorAuthentication(app(TwoFactorAuthenticationProvider::class)))($user);
        $user->two_factor_confirmed_at = now();
        $user->save();

        $this->assertTrue($user->hasEnabledTwoFactorAuthentication());

        // hit the 3 request per minute limit
        for ($i = 0; $i < 3; $i++) {
            $response = $this->withSession(["login" => ["id" => $user->id]])->postJson(
                "/two-factor-challenge",
                ["recovery_code" => "000000"],
            );
            $response->assertStatus(422);
        }

        $response = $this->withSession(["login" => ["id" => $user->id]])->postJson(
            "/two-factor-challenge",
            ["recovery_code" => "000000"],
        );
        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
    }

    public
    function test_logout_response_is_no_content() {
        Event::fake();
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );

        $user->email_verified_at = now();
        $user->save();

        $response = $this->actingAs($user)->post(route("logout"));
        $response->assertRedirect("/");
    }
}
