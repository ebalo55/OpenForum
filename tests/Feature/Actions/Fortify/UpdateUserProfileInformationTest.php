<?php

namespace Tests\Feature\Actions\Fortify;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class UpdateUserProfileInformationTest extends TestCase {
    public
    function test_updates_user_email_and_sends_notification() {
        Notification::fake();
        $user = $this->makeUser();

        $this->assertNotEquals(
            "test@example.com",
            $user->email,
        );
        $class = new UpdateUserProfileInformation();
        $class->update(
            $user,
            ["email" => "test@example.com"],
        );

        $user->refresh();
        $this->assertEquals(
            "test@example.com",
            $user->email,
        );
        Notification::assertSentTo(
            $user,
            VerifyEmail::class,
        );
    }
}
