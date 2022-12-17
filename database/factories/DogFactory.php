<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'race'=>$this->faker->text(8),
            'notes'=>$this->faker->realText(69),
            'age'=>$this->faker->numberBetween(1,15),
            'id_user'=>User::factory(),
        ];
    }
}
