<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Admin2']);
        $role3 = Role::create(['name'=>'Cliente']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.salas.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.salas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.salas.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.salas.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.salas.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.categorias.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.categorias.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.categorias.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.categorias.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.users.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.servicios.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.servicios.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.servicios.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.servicios.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.servicios.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.citas.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.citas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.citas.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.citas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.citas.destroy'])->syncRoles([$role1,$role2]);
    }
}
