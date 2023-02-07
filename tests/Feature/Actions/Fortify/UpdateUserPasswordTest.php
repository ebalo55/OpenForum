<?php

namespace Tests\Feature\Actions\Fortify;

use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UpdateUserPasswordTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public
    function test_can_update_user_password() {
        $user = $this->makeUser();
        $this->actingAs($user);

        $this->assertTrue(
            Hash::check(
                "password",
                $user->password,
            ),
        );

        $class = new UpdateUserPassword();
        $class->update(
            $user,
            [
                "current_password"      => "password",
                "password"              => "qW3£ty0000000000",
                "password_confirmation" => "qW3£ty0000000000",
            ],
        );

        $user->refresh();
        $this->assertTrue(
            Hash::check(
                "qW3£ty0000000000",
                $user->password,
            ),
        );
    }
}
