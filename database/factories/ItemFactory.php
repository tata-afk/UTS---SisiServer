<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => rand(100000, 1000000),
            'quantity' => rand(1, 100),
            'category_id' => rand(1, 3),
            'supplier_id' => rand(1, 10),
            'created_by' => 1,
        ];
    }
}
