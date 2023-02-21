<?php

namespace App\Notifications;

use App\Models\User;
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
        return (new MailMessage())->markdown("mails.reservation-confirmed");
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
        //
    }
}
