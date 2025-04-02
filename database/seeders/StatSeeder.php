<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stat::create([
            'cpu' => 47,
            'total_likes' => 1573,
            'total_sales' => 2012,
            'new_members' => 21,
        ]);
    }
}
