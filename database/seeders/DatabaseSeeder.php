<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Comentario;
use Illuminate\Database\Seeder;
use App\Models\Sala;
use App\Models\Servicio;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Sala::factory(5)->create();
       // $this->call(RoleSeeder::class);
        //Categoria::factory(5)->create();
        //Servicio::factory(5)->create();
        //Usuario::factory(5)->create();
        //Comentario::factory(5)->create();
        $this->call(UserSeeder::class);
    }
}
