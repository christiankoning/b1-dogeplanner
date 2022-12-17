<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PunchCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'progress'=>$this->faker->numberBetween(1,10),
            'limit'=>10,
            'id_user'=>$this->faker->numberBetween(1,8)
        ];
    }
}
