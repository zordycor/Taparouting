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
    $rutas = DB::table('rutas')->get();
    return view('welcome', compact('rutas'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    return view('ruta',['ruta'=>$ruta]);
});

Route::get('/ruta/1', function ($localidad) {
	$ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    return view('organizator',['ruta'=>$ruta]);
});

Route::get('/ruta/tapa/{nombre}', function ($id) {
	$tapa = DB::table('tapas')->where('id',$id)->first();
    return view('bar',['tapa'=>$tapa]);
});