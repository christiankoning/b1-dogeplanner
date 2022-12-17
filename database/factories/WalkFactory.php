<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => now()->addDays($this->faker->numberBetween(1,20)),
            'start_time' => "10:00:00",
            'end_time' => "11:00:00",
            'amount_dogs' => $this->faker->numberBetween(1,5),
            'location' => $this->faker->city(),
            'id_user' => 24
        ];
    }
}
