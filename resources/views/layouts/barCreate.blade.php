@extends('templates.master')
@section('main')
<a href="/"><i class="fas fa-angle-left"></i></a>
<div class="main-container main-container--config bgbar">
  <div class="cont-config">
    <div class="title">
      <h1>Panel de configuración</h1>
    </div>
    <hr>

      <ul>
           @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
      </ul>


      {!! Form::open(['route' => 'layouts.barStore', 'files' => true]) !!}
    {{Form::token()}}
    <div class="rowForm">
      <div class="form-control">
        {!! Form::label('nombre', 'Nombre del bar') !!}
        {!! Form::text('nombre') !!}
      </div>
      <div class="form-control">
        {!! Form::label('direccion', 'Dirección') !!}
        {!!Form::text('direccion')!!}
      </div>
        <div class="form-control">
         {!! Form::label('telefono', 'Teléfono') !!}
         {!!Form::text('telefono')!!}
        </div>
      <div class="form-control">
        {!!Form::label('tapaimg', 'Foto de la tapa')!!}
        {!!Form::file('tapaimg')!!}
      </div>
    </div>
    <div class="form-control">
      {!!Form::label('horarios', 'Horario')!!}
      {!!Form::textarea('horarios')!!}
    </div>
    <div class="form-control">
      {!!Form::label('tapanom', 'Nombre de la tapa')!!}
      {!!Form::text('tapanom')!!}
    </div>
    <div class="form-control">
      {!!Form::label('tapadesc', 'Descripción de la tapa')!!}
      {!!Form::text('tapadesc')!!}
    </div>
    <div class="form-control">
      {!!Form::label('ruta_id', 'Ruta de la tapa')!!}
      {!!Form::select('ruta_id', $rutas)!!}
    </div>
    <div class="form-control submit">
      {!!Form::submit('Guardar cambios', ['class' => 'btn btn-success'])!!}
    </div>
    {!! Form::close() !!}
  </div>
</div>