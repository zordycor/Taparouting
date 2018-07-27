<?php

use App\Ruta;
use App\Bar;
use App\User;
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

Route::post('/ruta/edit', 'RutasController@edit');
Route::post('/ruta', 'RutasController@store');
Route::get('/search', 'MainController@search');
Route::get('/searchAll', 'MainController@searchAll');
Route::post('/barupdate/{id}', 'BaresController@update');
Route::post('/rutaupdate/{id}', 'RutasController@update');



Route::get('/', function () {
    $rutas = Ruta::orderBy('inicio', 'asc')->get();
    $bares = Bar::get();
    $users = User::get();
    $error = '';

    $user = Auth::user()->id ?? null;

    $ruta = Ruta::where('user_id', $user);
    $bar = Bar::where('user_id', $user);
    return view('welcome', compact('rutas', 'bares','error','users','user','ruta','bar'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = Ruta::where('localidad',$localidad)->first();
    $bares = $ruta->related();
    return view('layouts.ruta', compact('ruta', 'bares'));
})->name('ruta');

Route::get('/config', function () {
    $user = Auth::user();

    if($user['role'] == '1'){
        $bar = DB::table('bares')->where('user_id',$user->id)->first();
        $rutas = Ruta::pluck('nombre','id');
        return view('layouts.barConfig', compact('user','bar','rutas'));
    }

    if($user['role'] == '0'){
        $ruta = DB::table('rutas')->where('user_id',$user->id)->first();
        $bares = DB::table('bares')->where('ruta_id',$ruta->id)->where('aceptado',1)->get();
        return view('layouts.rutaConfig', compact('user','ruta','bares'));
    }
});

Route::get('/bar/{id}', function ($id) {
    $bar = DB::table('bares')->where('id',$id)->first();
    $ruta = DB::table('rutas')->where('id',$bar->ruta_id)->first();
    return view('layouts.bar', compact('ruta', 'bar'));
})->name('bar');


Route::get('/barupdate/{id}', function ($id) {
  $bar = DB::table('bares')->where('id',$id)->first();
  $ruta = DB::table('rutas')->where('id',$bar->ruta_id)->first();
  return view('layouts.bar', compact('ruta', 'bar'));
});

Route::get('/barCreate', 'BaresController@create')->name('layouts.barCreate');
Route::post('/barStore', 'BaresController@store')->name('layouts.barStore');

Route::get('/rutaCreate', 'RutasController@create')->name('layouts.rutaCreate');
Route::post('/rutaStore', 'RutasController@store')->name('layouts.rutaStore');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
