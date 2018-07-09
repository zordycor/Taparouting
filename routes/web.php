<?php

use App\Ruta;
use App\Bar;

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
Route::get('/search/{searchKey}', 'RutasController@search');
Route::get('/search', 'MainController@search');
Route::post('/barupdate/{id}', 'BaresController@update');
Route::post('/rutaupdate/{id}', 'RutasController@update');



Route::get('/', function () {
    $rutas = DB::table('rutas')->get();
    $bares = DB::table('bares')->get();
    $users = DB::table('users')->get();
    $error = '';
    return view('welcome', compact('rutas', 'bares','error','users'));

});

Route::get('/ruta/{localidad}', function ($localidad) {
    $ruta = Ruta::where('localidad',$localidad)->first();
    $bares = $ruta->related();
    return view('layouts.ruta', compact('ruta', 'bares'));
});

Route::get('/config', function () {
    $user = Auth::user();

    if($user['role'] == '1'){
        $bar = DB::table('bares')->where('user_id',$user->id)->first();
        return view('layouts.barConfig', compact('user','bar'));
    }

    if($user['role'] == '0'){
        $ruta = DB::table('rutas')->where('user_id',$user->id)->first();
        return view('layouts.rutaConfig', compact('user','ruta'));
    }
});

Route::get('/bar/{id}', function ($id) {
    $bar = DB::table('bares')->where('id',$id)->first();
    $ruta = DB::table('rutas')->where('id',$bar->ruta_id)->first();
    return view('layouts.bar', compact('ruta', 'bar'));
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
