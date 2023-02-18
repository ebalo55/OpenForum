<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class PagesControllerTest extends TestCase {
    public
    function test_email_verification_route_redirects_to_frontend(): void {
        $user = User::factory()->create();

        Carbon::setTestNow(Carbon::create(2023));

        $response = $this->actingAs($user)->get(
            URL::temporarySignedRoute(
                "verification.verify",
                Carbon::now()->addMinutes(
                    Config::get(
                        'auth.verification.expire',
                        60,
                    ),
                ),
                [
                    'id'   => 1,
                    'hash' => sha1("test@example.com"),
                ],
            ),
        );

        $response->assertRedirect(
            "https://www.example.com/verification/email?id=1&hash=567159d622ffbb50b11b0efd307be358624a26ee&signature=b4c4442e04cd86768776a116055486514c8ef384fd86aa47cc7839f3eebf0ac7&expires=1672534800",
        );
    }

    public
    function test_root_redirect_to_login(): void {
        $response = $this->get('/');

        $response->assertRedirectToRoute("login");
    }
}
