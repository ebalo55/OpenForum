<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventDayFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public
    function definition(): array {
        return [
            'nickname'   => $this->faker->userName(),
            'date'       => $this->faker->dateTimeThisYear(),
            'location'   => $this->faker->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
