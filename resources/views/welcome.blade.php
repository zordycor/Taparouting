@extends('templates.master')
@section('main')
   <div class="main-container main-container--index animate fade-slide-down">
       <div class="indexTitle">
           <h1 class="mainTitle animate-pop-in">{!! nl2br('LAS RUTAS DE LA TAPA <br/><span class="reinventadas">Reinventadas</span>') !!}</h1>
       </div>
       <div class="searchBar animate-pop-in">

           {!! Form::open(['method'=>'GET','url'=>'/search','class'=>'searchBar','role'=>'search'])  !!}

           <div class="search animate-pop-in">
               <span class="fa fa-search searchIcon"></span>
               <input type="search" id="search" class="form-control" name="search" placeholder="Busca rutas o bares">
           </div>
           {!! Form::close() !!}

       </div>


       <div class="marquee animate-pop-in">
           @foreach($rutas as $ruta)
           @if($loop->index < 3)
           <a href="/ruta/{{$ruta->localidad}}">
               <div class="marqueeRuta">
                   <span class="date"><strong>{{ date('d', strtotime($ruta->inicio)) }}/{{ date('m', strtotime($ruta->inicio)) }}</strong></span>
                   <span class="ruta">{{ $ruta -> nombre }}</span>
               </div>
           </a>
           @endif
           @endforeach
           <p><a href="/searchAll?search=rutas">Ver más...</a></p>
       </div>


           <input type="hidden" class="count1" value="{{$bares->count()}}">
           <input type="hidden" class="count2" value="{{$rutas->count()}}">
           <input type="hidden" class="count3" value="{{$users->count()}}">

           <div class="statsHome">
               <div class="data">
                   <a href="/searchAll?search=bares">
                       <div id="odometer odometer1" class="odometer">0</div>
                       <div class="text">Bares registrados</div>
                   </a>
               </div>
               <div class="data">
                   <a href="/searchAll?search=rutas">
                       <div class="odometer odometer2">0</div>
                       <div class="text">Rutas disponibles</div>
                   </a>
               </div>
               <div class="data">
                   <div class="odometer odometer3">0</div>
                   <div class="text">Usuarios en activo</div>
               </div>
           </div>
   </div>
@endsection

