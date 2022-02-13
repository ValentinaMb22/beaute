<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'logotipo' => $this->faker->image(),
            'correo' => $this->faker->email(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->randomElement(['8234578805','123467891']),
        ];
    }
}
