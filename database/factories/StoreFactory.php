<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "street" => fake()->streetName(),
            "number" => fake()->buildingNumber(),
            "suburb" => fake()->cityPrefix(),
            "city" => fake()->city(),
            "state" => fake()->state(),
            "phone" => fake()->phoneNumber(),
            "email" => fake()->email(),
        ];
    }
}