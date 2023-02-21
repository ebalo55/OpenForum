<?php

namespace Tests\Feature\Notifications;

use App\Facade\SettingServiceFacade;
use App\Models\User;
use App\Notifications\ReservationConfirmed;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Notification;
use Spatie\MailPreview\Facades\SentMails;
use Tests\TestCase;

class ReservationConfirmedTest extends TestCase {
    public
    function test_can_send_notification(): void {
        Notification::fake();
        User::first()->notify(new ReservationConfirmed());
        Notification::assertSentToTimes(
            User::first(),
            ReservationConfirmed::class,
        );
    }

    public
    function test_returns_empty_array(): void {
        $this->assertEquals(
            [],
            (new ReservationConfirmed())->toArray(User::first()),
        );
    }

    public
    function test_email_is_well_formed(): void {
        // must override the phpunit.xml state (array) in order to trigger a fake email sending
        config()->set(
            "mail.default",
            "smtp",
        );
        SettingServiceFacade::setEventsStartingDay(now());
        SettingServiceFacade::setEventsEndingDay(now()->addDays());
        User::first()->notifyNow(new ReservationConfirmed());

        $mail = SentMails::last();
        $mail->assertFrom(config("mail.from.address"));
        $mail->assertTo(User::first()->email);
        $mail->assertSubjectContains(app(GeneralSettings::class)->site_name . " - Reservation confirmed");
        $mail->assertContains("Your reservations have been saved");
        $mail->assertContains("Powered by OpenForum");
    }
}
