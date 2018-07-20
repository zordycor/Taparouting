@extends('templates.master')
@section('main')
   <div class="main-container main-container--index animate fade-slide-down">
       <div class="indexTitle">
           <h1 class="mainTitle animate-pop-in">{!! nl2br('LAS RUTAS DE LA TAPA <br/><span class="reinventadas">REINVENTADAS</span>') !!}</h1>
       </div>
       <div class="searchBar animate-pop-in">

           {!! Form::open(['method'=>'GET','url'=>'/search','class'=>'searchBar','role'=>'search'])  !!}

           <div class="search animate-pop-in">
               <span class="fa fa-search searchIcon"></span>
               <input type="search" id="search" class="form-control" name="search" placeholder="Busca rutas o bares">
           </div>
           {!! Form::close() !!}

       </div>

        @if(!Auth::check())
           <div class="marquee animate-pop-in">
               @foreach($rutas as $ruta)
               @if($loop->index < 3)
               <div class="marqueeRuta">
                   <a href="/ruta/{{$ruta->localidad}}">
                       <strong>{{ date('d', strtotime($ruta->inicio)) }}/{{ date('m', strtotime($ruta->inicio)) }}</strong>
                       {{ $ruta -> nombre }}
                   </a>
               </div>
               @endif
               @endforeach
               ...
           </div>

           <input type="hidden" class="count1" value="{{$bares->count()}}">
           <input type="hidden" class="count2" value="{{$rutas->count()}}">
           <input type="hidden" class="count3" value="{{$users->count()}}">

           <div class="statsHome">
               <div class="data">
                   <div id="odometer odometer1" class="odometer">0</div>
                   <div class="text">Bares registrados</div>
               </div>
               <div class="data">
                   <div class="odometer odometer2">0</div>
                   <div class="text">Rutas disponibles</div>
               </div>
               <div class="data">
                   <div class="odometer odometer3">0</div>
                   <div class="text">Usuarios en activo</div>
               </div>
           </div>

       @else
           <div class="statsHome">
                <div class="animate-pop-in"><a href="/config">Accede a tu panel de control</a></div>
           </div>
       @endif
   </div>
@endsection

