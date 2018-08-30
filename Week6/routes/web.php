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
    $sql   = "select * from item";
    $items = DB::select($sql);

    return view('item_list')
        ->withItems($items);
});

Route::get('/add', function() {
    return view('add_item');
});

Route::get('/update_item/{id}', function($id) {
    $item = get_item($id);
    return view('update_item')
        ->withItem($item);
});

Route::get('item_detail/{id}', function ($id) {
    $item = get_item($id);
    return view('item_detail')
        ->withItem($item);
});

Route::post('/add_item_action', function() {
    $summary = request('summary');
    $details = request('details');
    $id = add_item($summary, $details);
    // If successfully created then display newly created item
    if ($id) {
        return redirect("/");
    } else {
        exit("Error creating item");
    }
});

Route::post('/update_item_action', function() {
    $summary = request('summary');
    $details = request('details');
    $id      = request('id');

    $sql = "update item set summary=?, details=? where id={$id}";
    DB::update($sql, array($summary, $details));
    return redirect("item_detail/{$id}");
});

Route::get('delete_item_action/{id}', function($id) {
    delete_item($id);
    return redirect("/");
});

function add_item($summary, $details) {
    $sql = "insert into item (summary, details) values (?, ?)";
    DB::insert($sql, array($summary, $details));
    $id = DB::getPdo()->lastInsertId();
    return $id;
}

function update_item($id, $summary, $details) {
    $sql = "update item set summary = ?, details = ? where id = ?";
    DB::update($sql, array($summary, $details, $id));
}

function delete_item($id) {
    $sql = "delete from item where id = ?";
    DB::delete($sql, array($id));
}

function get_item($id) {
    $sql = "select id, summary, details from item where id = ?";
    $items = DB::select($sql, array($id));
    if (count($items) != 1) {
        die("Invalid query or result: $query\n");
    }
    $item = $items[0];
    return $item;
}