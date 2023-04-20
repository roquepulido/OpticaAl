<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Eyeglass;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "folio" => fake()->unique()->numerify('AL-####'),
            "store_id" => fake()->randomElement(Store::all('id')),
            "employee_id" => fake()->randomElement(Employee::all('id')),
            "customer_id" => fake()->randomElement(Customer::all('id')),
            "purchase_date" => fake()->dateTime(),
            "sent_lab_date" => fake()->dateTime(),
            "delivery_date" => fake()->dateTime(),
            "comments" => fake()->text(),
            "warranty" => fake()->dateTime()
        ];
    }
}
