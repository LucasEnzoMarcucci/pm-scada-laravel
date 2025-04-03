<?php

namespace Database\Seeders;

use App\Models\Recap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecapSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Recap::factory()->count(1)->create();
  }
}
