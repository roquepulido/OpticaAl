<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        Permission::create(["name" => "edit"]);
        Permission::create(["name" => "delete"]);
        Role::create(['name' => 'sales']);
        Role::create(['name' => 'opto']);
        $role->givePermissionTo(["delete", "edit"]);
    }
}
