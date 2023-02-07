<?php

namespace Tests\Feature\Providers;

use App\Service\UserService;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class RouteServiceProviderTest extends TestCase {
    public
    function test_hitting_the_api_rate_limit_stops_responses() {
        RateLimiter::for(
            'api',
            function(Request $request) {
                return Limit::perDay(1)->by($request->user()?->id ?: $request->ip());
            },
        );

        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );
        $user->email_verified_at = now();
        $user->save();

        $response = $this->actingAs($user)->get(route("user.me"));
        $response->assertOk();

        $response = $this->actingAs($user)->get(route("user.me"));
        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
    }

    public
    function test_hitting_the_default_api_rate_limit_stops_responses() {
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );
        $user->email_verified_at = now();
        $user->save();

        // hit the 60 request per minute limit
        for ($i = 0; $i < 60; $i++) {
            $response = $this->actingAs($user)->get(route("user.me"));
            $response->assertOk();
        }

        $response = $this->actingAs($user)->get(route("user.me"));
        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
    }
}
