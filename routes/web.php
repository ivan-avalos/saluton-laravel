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
Route::get('/saluton', function() {
    return 'Saluton, mondo! Tiu ĉi estas retejo.';
});
Route::get('/nombro/{n}', function ($n) {
    return 'La nombro estas '.$n;
});