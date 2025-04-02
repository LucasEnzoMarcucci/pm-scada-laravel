<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = Stat::first();
        $orders = Order::all();
        return view('home', compact('stats', 'orders'));
    }
}
