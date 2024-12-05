<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home', ['title' => 'Dasboard Home']);
});
Route::get('/products', function() {
    return view('products', ['title' => 'Products Homepage', 
    'product' => Product::all() ]);
});
Route::get('/shop', function() {
    return view('shop', ['title' => 'Shop Homepage']);
});

Route::get('/products/{product:slug}', function(Product $product) {


    return view('product', ['title' => 'Halaman Product', 'product' => $product]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);