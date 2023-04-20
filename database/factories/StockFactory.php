<?php

namespace Database\Factories;

use App\Models\Frames;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "store_id" => fake()->randomElement(Store::all('id')),
            "frame_id" => fake()->randomElement(Frames::all('id')),
            "qty" => fake()->numberBetween(0, 100)
        ];
    }
}
