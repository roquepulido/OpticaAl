<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "last_name" => fake()->lastName(),
            "phone" => fake()->phoneNumber(),
            "email" => fake()->email(),
            "street" => fake()->streetName(),
            "number" => fake()->buildingNumber(),
            "suburb" => fake()->cityPrefix(),
            "city" => fake()->city(),
            "state" => fake()->state(),
            "postcode" => fake()->postcode(),
            "stateAbbr" => fake()->stateAbbr(),
        ];
    }
}
