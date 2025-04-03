<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'item_name' => fake()->word(),
      'status' => fake()->randomElement(['shipped', 'pending', 'delivered', 'processing']),
      'popularity' => json_encode(fake()->randomElements(range(0, 100), 10)),
    ];
  }
}
