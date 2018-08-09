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

require(app_path().'/pms.php');

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

    return view('display_greeting')
        ->withName($name)
        ->withAge($age);
});

Route::get('foreach', function() {
    return view('foreach')
        ->withGet(request()->all());
});

Route::get('pms', function() {
    return view('pms_search');
});

// To do: Perform search and display results
Route::post('search', function()
{
    // Fetch form data
    $name  = request()->input('name');
    $year  = request()->input('year');
    $state = request()->input('state');

    // call search() to perform search
    $pms = search($name, $year, $state);

    // call view to display search result
    return view('pms_result')
        ->withPms($pms)
        ->withName($name)
        ->withYear($year)
        ->withState($state);
});


/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state)
{
    $pms = getPms();

    // Filter $pms by $name
    if (!empty($name)) {
        $results = array();
        foreach ($pms as $pm) {
            if (stripos($pm['name'], $name) !== false) {
                $results[] = $pm;
            }
        }
        $pms = $results;
    }

    // Filter $pms by $year
    if (!empty($year)) {
        $results = array();
        foreach ($pms as $pm) {
            if (strpos($pm['from'], $year) !== false ||
                strpos($pm['to'], $year) !== false) {
                $results[] = $pm;
            }
        }
        $pms = $results;
    }

    // Filter $pms by $state
    if (!empty($state)) {
        $results = array();
        foreach ($pms as $pm) {
            if (stripos($pm['state'], $state) !== false) {
                $results[] = $pm;
            }
        }
        $pms = $results;
    }

    return $pms;
}