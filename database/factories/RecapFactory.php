<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recap>
 */
class RecapFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $revenue = fake()->randomFloat(2, 1000, 100000);
    $cost = fake()->randomFloat(2, 500, $revenue);

    return [
      'name' => fake()->word(),
      'data' => json_encode(fake()->randomElements(range(0, 100), 7)),
      'total_revenue' => $revenue,
      'total_cost' => $cost,
      'total_profit' => $revenue - $cost,
      'goal_completions' => fake()->numberBetween(0, 100)
    ];
  }
}
