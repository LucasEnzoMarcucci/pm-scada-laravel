<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
  use HasFactory;

  protected $fillable = [
    'products_cart',
    'complete_purchase',
    'prenium_visits',
    'send_inquiries'
  ];
}
