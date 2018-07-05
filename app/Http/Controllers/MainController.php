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
        return view('layouts.results', compact('rutas','bares','tapas'));
    }
}
