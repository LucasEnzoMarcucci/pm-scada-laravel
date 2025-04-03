<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Models\Recap;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $stats = Stat::first();
    $recaps = Recap::all();
    $orders = Order::all();
    return view('dashboard', compact('stats', 'recaps', 'orders'));
  }
}
