@extends('templates.master')
@include('layouts.app')
@section('main')
<div class="results">
    @if(count($rutas))
    <div class="resultsTitle">Rutas</div>
    <ul class="resultsValues">
        @foreach($rutas as $ruta)
        <li class="value"><a href="/ruta/{{ $ruta->localidad }}">{{ $ruta->nombre }}</a></li>
        @endforeach
    </ul>
    @endif
    @if($bares)
    <div class="resultsTitle">Bares</div>
    <ul class="resultsValues">
        @foreach($bares as $bar)
        <li class="value"><a href="/bar/{{ $bar->id }}">{{ $bar->nombre }} y su tapa "{{ $bar->tapanom }}"</li>
        @endforeach
    </ul>
    @endif
</div>

@endsection
@include('layouts.modalLogin')
@include('layouts.modalSignin')