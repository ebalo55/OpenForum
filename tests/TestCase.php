<?php

namespace Tests;

use App\Models\User;
use App\Service\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;

abstract
class TestCase extends BaseTestCase {
    use CreatesApplication, RefreshDatabase, WithFaker;

    protected bool $seed = true;

    protected
    function makeUser(): User {
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
            $this->faker->email,
        );
        $user->email_verified_at = now();
        $user->save();

        return $user;
    }
}
