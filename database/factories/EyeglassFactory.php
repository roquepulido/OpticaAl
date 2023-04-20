<?php

namespace Database\Factories;

use App\Models\Frames;
use App\Models\Lens;
use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eyeglass>
 */
class EyeglassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "frame_id" => fake()->randomElement(Frames::all("id")),
            "left_lent_id" => fake()->randomElement(Lens::all('id')),
            "rigth_lent_id" => fake()->randomElement(Lens::all('id')),
            "treatment_id" => fake()->randomElement(Treatment::all('id'))
        ];
    }
}
