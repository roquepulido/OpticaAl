<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frames>
 */
class FramesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "model" => fake()->word(),
            "color" => fake()->safeColorName(),
            "code" => fake()->bothify('??-####'),
        ];
    }
}