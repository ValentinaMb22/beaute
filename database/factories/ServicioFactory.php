<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sala_id'=>$this->faker->numberBetween(1,10),
            'categoria_id'=>$this->faker->numberBetween(1,4),
            'nombre'=>$this->faker->name(),
            'imagen'=>$this->faker->image(),
            'precio'=>$this->faker->randomElement(['15000','20000']),
            'descripcion'=>$this->faker->sentence(),
        ];
    }
}
