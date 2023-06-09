<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RolesSeeder::class);
        $this->call(BaseUserSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(FramesSeeder::class);
        $this->call(TreatmentSeeder::class);
        $this->call(DiagnosticSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(KindWorkSeeder::class);
        $this->call(LabSeeder::class);
        $this->call(LensSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(EyeglassSeeder::class);
    }
}
