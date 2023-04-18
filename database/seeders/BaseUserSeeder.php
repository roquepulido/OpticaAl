<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'), // password
            ]
        );
        $user->assignRole('admin');

        $user = User::create(
            [
                'name' => 'sales',
                'email' => 'sales@sales',
                'email_verified_at' => now(),
                'password' => bcrypt('sales'), // password
            ]
        );
        $user->assignRole('sales');


        $user = User::create(
            [
                'name' => 'opto',
                'email' => 'opto@opto',
                'email_verified_at' => now(),
                'password' => bcrypt('opto'), // password
            ]
        );
        $user->assignRole('opto');
    }
}
