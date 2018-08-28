<div id="conf" class="tab-pane active">
  {!! Form::model($ruta, ['action' => ['RutasController@update', $ruta->id], 'files' => true]) !!}
  {{Form::token()}}
  <div class="rowForm">
    <div class="form-control">
      {!! Form::label('nombre', 'Nombre de la ruta') !!}
      {!! Form::text('nombre') !!}
    </div>
    <div class="form-control">
      {!! Form::label('inicio', 'Fecha inicio') !!}
      {!!Form::date('inicio')!!}
    </div>
    <div class="form-control">
      {!!Form::label('fin', 'Fecha fin')!!}
      {!!Form::date('fin')!!}
    </div>
  </div>
  <div class="rowForm">
    <div class="form-control">
      {!!Form::label('price1', 'Primer premio')!!}
      {!!Form::text('price1')!!}
    </div>
    <div class="form-control">
      {!!Form::label('price2', 'Segundo premio')!!}
      {!!Form::text('price2')!!}
    </div>
    <div class="form-control">
      {!!Form::label('price3', 'Tercer premio')!!}
      {!!Form::text('price3')!!}
    </div>
  </div>
  <div class="form-control">
    {!!Form::label('description', 'Descripción')!!}
    {!! Form::textarea('description')!!}
  </div>
  <div class="form-control">
    {!!Form::label('img', 'Imagen de fondo')!!}
    {!!Form::file('img')!!}
  </div>
  <div class="form-control submit">
    {!!Form::submit('Guardar cambios', ['class' => 'btn btn-success'])!!}
  </div>
  {!! Form::close() !!}
</div>