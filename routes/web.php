<?php

use App\Ruta;
use App\Bar;
use App\User;
use App\Favorite;
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

Route::get('/ruta/{localidad}/', function ($localidad) {
    $ruta = Ruta::where('localidad',$localidad)->first();
    $bares = $ruta->related()->where('aceptado', 1);
    return view('layouts.ruta', compact('ruta', 'bares'));
})->name('ruta');

Route::get('/config', function () {
    $user = Auth::user();

    if($user['role'] == '1'){
        $bar = DB::table('bares')->where('user_id',$user->id)->first();
        $rutas = Ruta::pluck('nombre','id');
        return view('layouts.barconfig', compact('user','bar','rutas'));
    }

    if($user['role'] == '0'){
      $ruta = DB::table('rutas')->where('user_id',$user->id)->first();
      $bares = DB::table('bares')->where('ruta_id',$ruta->id)->get();

      $favs = DB::table('favorites')
        ->select('favorites.favoriteable_id',DB::raw('COUNT(favoriteable_id) as count'))
        ->groupBy('favoriteable_id')
        ->orderBy('count', 'desc')
        ->get();

      $favsid = [];
      foreach ($favs as $fav){
        array_push($favsid, $fav->favoriteable_id);
      }

      $tab0 = $_GET['tab0'] ?? 0 ;
      $tab1 = $_GET['tab1'] ?? 0 ;

      return view('layouts.rutaconfig', compact('user','ruta','bares','favsid', 'tab0', 'tab1','favs'));
    }
});

Route::get('/bar/{id}/', function ($id) {
    $me = Auth::user();
    $bar = Bar::where('id',$id)->first();
    $users = $bar->favoritedBy();
    $favorited = false;

    if($users!=null){
      $users = $users->toArray();

      foreach($users as $k=>$v){
        if($v['id']==$me['id']){
          $favorited = true;
          break;
        }
      }
    }

    $ruta = DB::table('rutas')->where('id',$bar->ruta_id)->first();
    return view('layouts.bar', compact('ruta', 'bar', 'favorited'));
})->name('bar');


Route::get('/barupdate/{id}/', function ($id) {
  $bar = DB::table('bares')->where('id',$id)->first();
  $ruta = DB::table('rutas')->where('id',$bar->ruta_id)->first();
  return view('layouts.bar', compact('ruta', 'bar'));
});

Route::get('/barcreate/', 'BaresController@create')->name('barcreate');
Route::post('/barstore/', 'BaresController@store')->name('barstore');

Route::get('/rutacreate/', 'RutasController@create')->name('rutacreate');
Route::post('/rutastore/', 'RutasController@store')->name('rutastore');

Auth::routes();

Route::get('/dashboard/', 'DashboardController@index');

Route::get('/togglefav/{id}', 'BaresController@fav');

Route::get('/action/{action}/{id}', 'RutasController@actionBar');


Route::get('/cleancache', function () {
  exec('php artisan cache:clear');
  Session::flush();
});
