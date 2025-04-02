<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stat extends Model
{
  use HasFactory;

  protected $fillable = [
    'cpu',
    'total_likes',
    'total_sales',
    'new_members',
  ];
}