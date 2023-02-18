<?php

namespace Database\Factories;

use App\Models\EventDay;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public
    function definition(): array {
        return [
            'event_day_id' => EventDay::factory(),
            'title'        => $this->faker->sentence(),
            'markup'       => $this->faker->randomHtml(),
            'starting_at'  => $this->faker->time(),
            'ending_at'    => $this->faker->time(),
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }

    public
    function withMaxReservations(
        int $reservations,
    ): Factory {
        return $this->state(
            fn(array $attributes) => [
                "max_reservation" => $reservations,
            ],
        );
    }
}
