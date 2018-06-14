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
    $tapas = DB::table('tapas')->get();
    $bar = DB::table('bar')->get();
    $error = '';
    return view('welcome', compact('rutas','tapas', 'bar', 'error'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = DB::table('rutas')->where('localidad',$localidad)->first();
    list($tapas,$bar) = $ruta->related();
    return view('organizator', compact('ruta', 'tapas', 'bar'));
});

Route::get('/tapa/{id}', function ($id) {
	$tapa = DB::table('tapas')->where('id',$id)->first();
    $ruta = DB::table('rutas')->where('id',$tapa->ruta)->first();
    $bar = DB::table('bar')->where('id',$tapa->bar)->first();
    return view('tapa', compact('tapa','ruta', 'bar'));

});

Route::get('/tapa/{id}/qr', function ()
{
    return  QRCode::url('/tapa/{id}/qr')
        ->setSize(8)
        ->setMargin(2)
        ->png();
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


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
//Route::get('/ruta/{localidad}', 'RutasController@show');
Route::get('/tapa/crear', 'TapasController@create');
