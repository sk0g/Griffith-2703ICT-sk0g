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

Route::get('hello', function() {
    return "Hello!";
});

Route::get('user/{name}', function($name) {
    return "Hello, $name.";
});

Route::get('greet', function() {
    return view('greet');
});

Route::post('greeting', function() {
    $name = request('name');
    $age  = request('age');
    $age += 1;

    return view('display_greeting')
        ->withName($name)
        ->withAge($age);
});
