<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::factory()->create(['name' => 'Leon']);
        Store::factory()->create(['name' => 'Silao']);
        Store::factory()->create(['name' => 'Irapuato']);
    }
}
