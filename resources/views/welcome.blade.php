@extends('templates.master')

@section('main')
   <div class="main-container">
        <ul class="calendar">
                @foreach($rutas as $ruta)
                <li>
                   <a href="/ruta/{{ $ruta->localidad }}"><strong>{{ date('d/m', strtotime($ruta->inicio)) }}</strong>  {{ $ruta->nombre }}</a>
                </li>
                @endforeach
            </ul>
      </div>

@endsection

