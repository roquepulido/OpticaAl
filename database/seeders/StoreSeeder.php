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
        // Store::factory()->create(['name' => 'Leon']);
        // Store::factory()->create(['name' => 'Silao']);
        // Store::factory()->create(['name' => 'Irapuato']);
        Store::create([
            'name' => 'León',
            "street" => 'Francisco I. Madero',
            "number" => '422-2',
            "suburb" => 'Centro',
            "city" => 'León',
            "state" => 'Guanajuato',
            "stateAbbr" => 'Gto.',
            "phone" => '+52 477-272-9990',
            "email" => 'leon@optica-al.com',
            "postcode" => '37000',
        ]);
        Store::create([
            'name' => 'Silao',
            "street" => '5 de Mayo',
            "number" => '23-A',
            "suburb" => 'Centro',
            "city" => 'Silao',
            "state" => 'Guanajuato',
            "stateAbbr" => 'Gto.',
            "phone" => '+52 472-140-3533',
            "email" => 'silao@optica-al.com',
            "postcode" => '36100',
        ]);
        Store::create([
            'name' => 'Irapuato',
            "street" => 'Vicente Guerrero',
            "number" => '792',
            "suburb" => 'Centro',
            "city" => 'Irapuato',
            "state" => 'Guanajuato',
            "stateAbbr" => 'Gto.',
            "phone" => '+52 462-347-7016',
            "email" => 'irapuato@optica-al.com',
            "postcode" => '36510',
        ]);
    }
}
