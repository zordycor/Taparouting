@extends('templates.master')
@section('main')
   <div class="main-container animate fade-slide-down">
       <div class="indexTitle">
           <h1 class="mainTitle animate-pop-in">{!! nl2br('LAS RUTAS DE LA TAPA <br/><span class="reinventadas">REINVENTADAS</span>') !!}</h1>
       </div>
       <div class="searchBar animate-pop-in">

           {!! Form::open(['method'=>'GET','url'=>'/search','class'=>'searchBar','role'=>'search'])  !!}

           <div class="search animate-pop-in">
               <span class="fa fa-search searchIcon"></span>
               <input type="search" id="search" class="form-control" name="search" placeholder="Busca rutas por localidad">
           </div>
           <div class="errorMessage">{{ $error }}</div>
           {!! Form::close() !!}
   </div>

@endsection
       @include('layouts.modalLogin')
       @include('layouts.modalSignin')

