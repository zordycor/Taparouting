@extends('templates.master')
@include('layouts.app')
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
       <div class="searchBar animate-pop-in">

           {!! Form::open(['method'=>'GET','url'=>'/search','class'=>'searchBar','role'=>'search'])  !!}

           <div class="search animate-pop-in">
               <span class="fa fa-search searchIcon"></span>
               <input type="search" id="search" class="form-control" name="search" placeholder="Busca rutas por localidad">
           </div>
           {!! Form::close() !!}
   </div>

@endsection

