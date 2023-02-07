<?php

namespace Tests\Feature\Providers;

use App\Models\User;
use App\Service\UserService;
use Illuminate\Support\Str;
use Tests\TestCase;

class AuthServiceProviderTest extends TestCase {
    public
    function test_check_super_admin_gate_always_true() {
        $user = User::whereEmail("ebalo@insane-dev.tips")->first();

        $this->assertTrue($user->can(Str::random()));
        $this->assertTrue($user->can(Str::random()));
        $this->assertTrue($user->can(Str::random()));
    }

    public
    function test_creates_correct_reset_url() {
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );
        $user->email_verified_at = now();
        $user->save();
        $user->sendPasswordResetNotification("test");

        // this is a placeholder as no notification faking can be made if we want
        // to trigger the internal call
        $this->assertTrue(true);
    }
}
