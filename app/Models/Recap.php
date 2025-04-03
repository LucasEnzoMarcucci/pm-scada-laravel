<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recap extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'data',
    'total_revenue',
    'total_cost',
    'total_profit',
    'goal_completions'
  ];
}
