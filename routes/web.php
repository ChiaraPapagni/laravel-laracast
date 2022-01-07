<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/topics', function () {
    return view('topics');
})->name('topics');

Route::get('/', function () {
    $series = config('db.series');
    return view('series.series', compact('series'));
})->name('series');

Route::get('/larabits', function () {
    return view('larabits');
})->name('larabits');

Route::get('/discussions', function () {
    return view('discussions');
})->name('discussions');

Route::get('/podcast', function () {
    return view('podcast');
})->name('podcast');

// DINAMIC ROUTE
Route::get('series/updated/{id}', function ($id) {
    $series = config('db.series.updated');

    if (is_numeric($id) && $id >= 0 && $id < count($series)) {
        $serie = $series[$id];
        return view('series.show', compact('serie'));
    } else {
        abort(404);
    }
})->name('serie');