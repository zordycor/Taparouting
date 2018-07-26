<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;
use App\Bar;

class MainController extends Controller
{
    public function search(Request $request, $searchKey=null){
        if($searchKey == null){
            $searchKey = $request->input('search');
        }
        $rutas = Ruta::where('nombre','LIKE','%'. $searchKey .'%')->get();
        $bares = Bar::where('nombre','LIKE','%'. $searchKey .'%')->get();
        $tapas= Bar::where('tapanom','LIKE','%'. $searchKey .'%')->get();

        if($searchKey == 'bares' || $searchKey == 'rutas'){
          return $this->searchAll($request, $searchKey);
        }

        $countR = $rutas->count();
        $countB = $bares->count();
        return view('layouts.results', compact('rutas','bares','tapas','countB','countR'));
    }

  public function searchAll(Request $request, $searchKey=null){

      if($searchKey == null){
      $searchKey = $request->input('search');
    }

    if($searchKey == 'bares'){
      $bares = Bar::get();
      $countB = $bares->count();
    }else{
      $bares = null;
      $countB = 0;
    }

    if($searchKey == 'rutas'){
      $rutas = Ruta::get();
      $countR = $rutas->count();
    }else{
      $rutas = null;
      $countR = 0;
    }

    return view('layouts.results', compact('rutas','bares','countB','countR'));
  }
}
