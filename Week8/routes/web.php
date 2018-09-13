<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;
use App\Manufacturer;

Route::get('/', function () {
    return redirect('/product');
});

Route::get('/test', function () {
    $products = Product::all();

    dump($products);
});

Route::get('/productsBy/{id}', function($id) {
    $manufacturer = Manufacturer::find($id);

    dump($manufacturer->products);
});

Route::get('/manufacturerOf/{id}', function($id) {
    $product = Product::find($id);

    dump("Product:", $product, "Manufacturer:", $product->manufacturer);
});

Route::resource('product', 'ProductController');