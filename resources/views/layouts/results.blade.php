@extends('templates.master')
@section('main')
<div class="main-container animate fade-slide-down">
    <a href="/"><i class="fas fa-angle-left"></i></a>
    <div class="results">
        <div class="bg-row"></div>
        <div class="title titleResults"><h1>Resultados</h1></div>
        @if(!count($rutas) && !count($bares))
            <div class="noResults">No se han encontrado resultados</div>
        @endif

        @if(count($rutas))
        <div class="title resultsGroup"><h2>Rutas</h2></div>
        <ul class="resultsValues">
            @foreach($rutas as $ruta)
            <li class="value"><a href="/ruta/{{ $ruta->localidad }}"><i class="fas fa-angle-right"></i>{{ $ruta->nombre }}</a></li>
            @endforeach
        </ul>
        @endif
        @if(count($bares))
        <div class="title resultsGroup"><h2>Bares</h2></div>
        <ul class="resultsValues">
            @foreach($bares as $bar)
            <li class="value"><a href="/bar/{{ $bar->id }}">{{ $bar->nombre }} y su tapa "{{ $bar->tapanom }}"</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>

@endsection
@include('layouts.modalLogin')
@include('layouts.modalSignin')