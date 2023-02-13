<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReservationFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public
    function definition(): array {
        return [
            'user_id'      => $this->faker->randomNumber(),
            'event_day_id' => $this->faker->randomNumber(),
            'activity_id'  => $this->faker->randomNumber(),
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ];
    }
}
