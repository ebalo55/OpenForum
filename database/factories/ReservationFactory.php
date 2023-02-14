<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public
    function definition(): array {
        return [
            'user_id'      => User::factory(),
            'event_day_id' => EventDay::factory(),
            'activity_id'  => Activity::factory(),
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }

    public
    function withUser(
        User $user,
    ): Factory {
        return $this->state(
            fn(array $attributes) => [
                "user_id" => $user->id,
            ],
        );
    }

    public
    function withEvent(
        EventDay $event_day,
    ): Factory {
        return $this->state(
            fn(array $attributes) => [
                "event_day_id" => $event_day->id,
            ],
        );
    }

    public
    function withActivity(
        Activity $activity,
    ): Factory {
        return $this->state(
            fn(array $attributes) => [
                "activity_id" => $activity->id,
            ],
        );
    }
}
