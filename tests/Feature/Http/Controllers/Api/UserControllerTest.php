<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Facade\UserServiceFacade;
use App\Models\User;
use Tests\TestCase;

class UserControllerTest extends TestCase {
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
}
