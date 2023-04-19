<?php

namespace Database\Seeders;

use App\Models\Frames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FramesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Frames::factory(50)->create();
    }
}