<?php

namespace Database\Factories;

use App\Models\Diagnostic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            "diagnostic_id" => fake()->randomElement(Diagnostic::all('id'))
        ];
    }
}
