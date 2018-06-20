<?php

use App\Ruta;
use App\Bar;
use App\Tapa;
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

Route::put('/ruta/edit', 'RutasController@edit');
Route::post('/ruta', 'RutasController@store');
Route::get('/search/{searchKey}', 'RutasController@search');
Route::get('/search', 'RutasController@search');



Route::get('/', function () {
    $rutas = DB::table('rutas')->get();
    $bares = DB::table('bares')->get();
    $error = '';
    return view('welcome', compact('rutas', 'bares', 'error'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    $bares = $ruta->related();
    return view('layouts.ruta', compact('ruta', 'bares'));
});

Route::get('/ruta/{localidad}/config', function ($localidad) {
    $ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    $bares = $ruta->related();
    return view('layouts.config', compact('ruta', 'bares'));
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
