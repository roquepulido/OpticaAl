<?php

namespace Database\Seeders;

use App\Models\Eyeglass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EyeglassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eyeglass::factory(5)->create();
    }
}
