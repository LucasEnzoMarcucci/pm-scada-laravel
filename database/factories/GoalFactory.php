<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'products_cart' => fake()->numberBetween(0, 200),
      'complete_purchase' => fake()->numberBetween(0, 400),
      'prenium_visits' => fake()->numberBetween(0, 800),
      'send_inquiries' => fake()->numberBetween(0, 500),
    ];
  }
}
