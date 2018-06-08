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
    $tapas = DB::table('tapas')->get();
    $bar = DB::table('bar')->get();
    return view('welcome', compact('rutas','tapas', 'bar'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    $tapas = DB::table('tapas')->where('ruta',$ruta->id)->get();
    $bar = DB::table('bar')->where('ruta',$ruta->id)->first();
    return view('organizator', compact('ruta', 'tapas', 'bar'));
});

Route::get('/tapa/{id}', function ($id) {
	$tapa = DB::table('tapas')->where('id',$id)->first();
    $ruta = DB::table('rutas')->where('id',$tapa->ruta)->first();
    $bar = DB::table('bar')->where('id',$tapa->bar)->first();
    return view('tapa', compact('tapa','ruta', 'bar'));

});

Route::get('/bar/{id}', function ($id) {
	$bar = DB::table('bar')->where('id',$id)->first();
	$rutas = DB::table('rutas')->get();

	$data = [
		'bar' => $bar,
		'rutas' => $rutas
	];

    return view('bar', $data);
});

