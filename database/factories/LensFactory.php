<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lens>
 */
class LensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "tipo" => fake()->word(),
            "esfera" => fake()->numberBetween(-15, 15),
            "cilindro" => fake()->numberBetween(-15, 15),
            "eje" => fake()->numberBetween(-15, 15),
            "adicion" => fake()->numberBetween(-15, 15),
            "altura" => fake()->numberBetween(-15, 15),
            "dip" => fake()->numberBetween(-15, 15),
            "comentarios" => fake()->text()
        ];
    }
}
