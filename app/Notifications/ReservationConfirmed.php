<?php

namespace App\Notifications;

use App\Models\User;
use App\Queries\DateOrderedReservationsQuery;
use App\Settings\GeneralSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationConfirmed extends Notification {
    use Queueable;

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public
    function toArray(
        User $notifiable,
    ): array {
        return [
            //
        ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public
    function toMail(
        User $notifiable,
    ): MailMessage {
        $notifiable->loadCount("reservations");
        return (new MailMessage())
            ->subject(app(GeneralSettings::class)->site_name . " - Reservation confirmed")
            ->markdown(
                "mails.reservation-confirmed",
                [
                    "user"                 => $notifiable,
                    "reservation_count"    => $notifiable->reservations_count,
                    "ordered_reservations" => DateOrderedReservationsQuery::handle(
                        $notifiable->reservations()->getQuery(),
                    )->get(),
                    "unique_days_count"    => app(GeneralSettings::class)->events_ending_day->diffInDays(
                        app(GeneralSettings::class)->events_starting_day,
                    ),
                ],
            );
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public
    function via(
        User $notifiable,
    ): array {
        return ['mail'];
    }

    /**
     * Create a new notification instance.
     */
    public
    function __construct() {
        $this->afterCommit();
    }
}
