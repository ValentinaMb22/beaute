<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Valentina Mosquera',
          'email'=> 'vmosquera12@misena.edu.co',
          'password'=>bcrypt('123456789')
        ])->assignRole('Admin');
    }
}
