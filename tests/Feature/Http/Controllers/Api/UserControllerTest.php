<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Facade\UserServiceFacade;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class UserControllerTest extends TestCase {
    public
    function test_can_request_new_verification_email(): void {
        Notification::fake();

        $user = User::factory()->unverified()->create();

        $this->assertNull($user->email_verified_at);
        $response = $this->actingAs($user)->post(
            route("user.external.verify_email.request_new"),
        );

        $response->assertJson(
            [
                "data" => [],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );

        Notification::assertSentTimes(
            VerifyEmail::class,
            1,
        );
    }

    public
    function test_can_verify_email(): void {
        Notification::fake();

        $user = User::factory()->unverified()->create();

        $this->assertNull($user->email_verified_at);

        $response = $this->actingAs($user)->post(
            URL::temporarySignedRoute(
                "user.external.verify_email",
                Carbon::now()->addMinutes(
                    Config::get(
                        'auth.verification.expire',
                        60,
                    ),
                ),
                [
                    'id'   => $user->id,
                    'hash' => sha1($user->getEmailForVerification()),
                ],
            ),
        );

        $response->assertJson(
            [
                "data" => [
                    "id"         => $user->prefixed_id,
                    "attributes" => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                ],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );

        //        Notification::assertSentTimes(VerifyEmail::class, 1);
    }

    public
    function test_correctly_returns_access_data_for_user_if_authenticated(): void {
        $admin = User::first();
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->post(
            route("user.external.login"),
            ["name" => $user->name, "password" => "password"],
        );

        $response->assertJson(
            [
                "data" => [
                    "id"         => $user->prefixed_id,
                    "attributes" => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                ],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_correctly_returns_validation_errors_if_present(): void {
        $admin = User::first();
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->post(
            route("user.external.login"),
            ["name" => $user->name, "password" => "P@ssw0rd"],
        );

        $response->assertJson(
            [
                "data" => [],
                "meta" => [
                    "success" => false,
                    "errors"  => [
                        [
                            "reference_code" => 0,
                            "field"          => "name",
                            "message"        => [
                                "These credentials do not match our records.",
                            ],
                        ],
                    ],
                ],
            ],
        );
    }

    public
    function test_requesting_new_verification_email_with_already_verified_one_do_not_send_new_email(): void {
        Notification::fake();

        $user = User::factory()->create();

        $this->assertNotNull($user->email_verified_at);
        $response = $this->actingAs($user)->post(
            route("user.external.verify_email.request_new"),
        );

        $response->assertJson(
            [
                "data" => [
                    "id"         => $user->prefixed_id,
                    "attributes" => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                ],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );

        Notification::assertNothingSent();
    }

    public
    function test_correctly_retrieves_current_user_data(): void {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(
            route("user.me"),
        );

        $response->assertJson(
            [
                "data" => [
                    "id"         => $user->prefixed_id,
                    "attributes" => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                ],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }
}
