<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
  return view('welcome');
});


Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/test', function () {
//   return view('test');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
