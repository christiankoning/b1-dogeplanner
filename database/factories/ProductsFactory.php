<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(8),
            'description'=>$this->faker->realText( 75),
            'price'=>75,
            'discount'=>10,
        ];
    }
}
