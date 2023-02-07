<?php

namespace Tests\Feature\Actions\Fortify;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Tests\TestCase;

class UpdateUserProfileInformationTest extends TestCase {
    public
    function test_updates_user_name() {
        $user = $this->makeUser();

        $this->assertNotEquals(
            "test",
            $user->name,
        );
        $class = new UpdateUserProfileInformation();
        $class->update(
            $user,
            ["name" => "test", "email" => $user->email],
        );

        $user->refresh();
        $this->assertEquals(
            "test",
            $user->name,
        );
    }
}
