<?php

namespace App\Http\Controllers;
use App\Ruta;
use App\Tapa;
use App\Bar;
use App\User;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rutas = Ruta::orderBy('inicio', 'asc')->get();
      $bares = Bar::get();
      $users = User::get();
      $error = '';

      $user = Auth::user()->id ?? null;

      $ruta = Ruta::where('user_id', $user);
      $bar = Bar::where('user_id', $user);
      return view('welcome', compact('rutas', 'bares','error','users','user','ruta','bar'));
    }
}
