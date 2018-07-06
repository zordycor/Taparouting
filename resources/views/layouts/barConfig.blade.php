<h2>Panel de configuración</h2>
<hr>
{!! Form::model($bar, ['action' => ['BaresController@update', $bar->id], 'files' => true]) !!}
{{Form::token()}}
<div class="form-control">
    {!! Form::label('nombre', 'Nombre del bar') !!}
    {!! Form::text('nombre') !!}
</div>
<div class="form-control">
    {!! Form::label('direccion', 'Dirección') !!}
    {!!Form::text('direccion')!!}
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
    {!!Form::label('tapaimg', 'Foto de la tapa')!!}
    {!!Form::file('tapaimg')!!}
</div>
<div class="form-control">
    {!!Form::submit('Guardar cambios')!!}
</div>
{!! Form::close() !!}