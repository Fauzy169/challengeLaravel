<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Dasboard Home', 'user' => User::all()]);
})->middleware('auth');
Route::get('/products', function() {
    return view('products', ['title' => 'Products Homepage', 
    'product' => Product::all() ]);
})->middleware('auth');
Route::get('/shop', function() {
    return view('shop', ['title' => 'Shop Homepage']);
})->middleware('auth');

Route::get('/products/{product:slug}', function(Product $product) {


    return view('product', ['title' => 'Halaman Product', 'product' => $product]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');