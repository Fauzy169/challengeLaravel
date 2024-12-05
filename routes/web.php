<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Product;


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

Route::get('/products/{slug}', function($slug) {

    $product = Product::find($slug);

    return view('product', ['title' => 'Halaman Product', 'product' => $product]);
});