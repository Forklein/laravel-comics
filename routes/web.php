<?php

use Hamcrest\Type\IsNumeric;
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

Route::get('/', function () {
    return redirect('/comics');
});

Route::get('/characters', function () {
    return view('characters');
})->name('characters');


//# index and show
Route::get('/comics', function () {
    $comics = config('comics');
    $icons = config('comics_icon');
    return view('comics', compact('comics', 'icons'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $icons = config('comics_icon');
    if (Is_Numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comic', compact('comic', 'icons'));
    } else {
        abort(404);
    }
})->name('comic');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');
