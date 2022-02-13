<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->name(),
            'apellidos'=>$this->faker->lastName(),
            'foto'=>$this->faker->image(),
            'email'=>$this->faker->email(),
            'email_verified_at'=>$this->faker->date(),
            'clave'=>$this->faker->password(),
            'estado'=>$this->faker->randomElement(['activo','inactivo','bloqueado']),
            'tipo'=>$this->faker->randomElement(['usuario','administrador','superadministrador']),
        ];
    }
}
