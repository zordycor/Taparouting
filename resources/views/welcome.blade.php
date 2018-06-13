@extends('templates.master')

@section('main')
   <div class="main-container animate fade-slide-down">
<!--        <ul class="calendar">-->
<!--                @foreach($rutas as $ruta)-->
<!--                <li>-->
<!--                   <a href="/ruta/{{ $ruta->localidad }}"><strong>{{ date('d/m', strtotime($ruta->inicio)) }}</strong>  {{ $ruta->nombre }}</a>-->
<!--                </li>-->
<!--                @endforeach-->
<!--            </ul>-->
       <div class="indexTitle">
           <h1 class="title animate-pop-in">{!! nl2br('LAS RUTAS DE LA TAPA <br/><span class="reinventadas">REINVENTADAS</span>') !!}</h1>
       </div>
       <p class="indexButtons animate-pop-in">
           <button class="accessBar btn btn-outline-dark">Soy un bar</button>
           <button class="accessRuta btn btn-outline-dark">Soy un organizador</button>
       </p>
   </div>

@endsection

