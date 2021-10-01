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

Route::get('/', function () {
    $data = config('comics');
    $data_2 = config('home_icon');
    return view('home', ['cards' => $data, 'icons' => $data_2]);
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
