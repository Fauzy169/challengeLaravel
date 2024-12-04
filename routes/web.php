<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dasboard Home']);
});
Route::get('/products', function() {
    return view('products', ['title' => 'Products Homepage', 
    'product' => [
        [
            'judul' => 'Product no 1',
            'slug'=> 'product-no-01',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur minima, placeat dolor delectus maiores rerum soluta labore, laborum molestiae, ad voluptatibus! Soluta obcaecati iusto, ducimus, laboriosam dignissimos atque voluptatum nihil vero optio aut totam? Tenetur corrupti reiciendis at mollitia quis dolorum deleniti quae numquam?','nama' => 'Ahmad Fausi Febrian',
            'jabatan' => 'Junior Manager Shopee'
        ],
        [
            'judul' => 'Product no 2',
            'slug'=> 'product-no-02',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae harum incidunt vitae voluptatum maxime dicta aliquam fugit illo ipsa culpa distinctio molestiae quis, optio laborum.',
            'nama' => 'Syahrul Ramdhan',
            'jabatan' => 'Tenegerr'
        ]
    ]]);
});
Route::get('/shop', function() {
    return view('shop', ['title' => 'Shop Homepage']);
});

Route::get('/products/{slug}', function($slug) {
    $products = [
        [
            'judul' => 'Product no 1',
            'slug'=> 'product-no-01',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur minima, placeat dolor delectus maiores rerum soluta labore, laborum molestiae, ad voluptatibus! Soluta obcaecati iusto, ducimus, laboriosam dignissimos atque voluptatum nihil vero optio aut totam? Tenetur corrupti reiciendis at mollitia quis dolorum deleniti quae numquam?','nama' => 'Ahmad Fausi Febrian',
            'jabatan' => 'Junior Manager Shopee'
        ],
        [
            'judul' => 'Product no 2',
            'slug'=> 'product-no-02',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae harum incidunt vitae voluptatum maxime dicta aliquam fugit illo ipsa culpa distinctio molestiae quis, optio laborum.',
            'nama' => 'Syahrul Ramdhan',
            'jabatan' => 'Tenegerr'
        ]
    ];

    $product = Arr::first($products, function($product) use ($slug) {
        return $product['slug'] == $slug;
    });

    return view('product', ['title' => 'Halaman Product', 'product' => $product]);
});