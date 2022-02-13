<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sala_id'=>$this->faker->numberBetween(1,9),
            'usuario_id'=>$this->faker->numberBetween(1,5),
            'comentario'=>$this->faker->sentence(),
            'fecha'=>$this->faker->date(),
        ];
    }
}
