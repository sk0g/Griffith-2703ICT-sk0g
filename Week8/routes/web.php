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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $sql   = "select * from products";
    $products = DB::select($sql);

    $sql   = "select * from manufacturers";
    $manufacturers = DB::select($sql);

    dump($products, $manufacturers);
});
