<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\SaleOrder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleOrder>
 */
class SaleOrderFactory extends Factory
{

    protected $model = SaleOrder::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "TotalAmount" => fake()->numberBetween(20,50),
        ];
    }
}
