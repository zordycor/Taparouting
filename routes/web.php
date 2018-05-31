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

Route::get('/ruta', function () {
    return view('ruta');
});

Route::get('/ruta/1', function () {
    return view('organizator');
});

Route::get('/ruta/2', function () {
    return view('bar');
});
