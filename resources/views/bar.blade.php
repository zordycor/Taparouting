@extends('templates.master')

@section('main')

    <div class="main-container">
    	<h2>Mi Bar</h2>
    	<hr>
    	<form>
	            <div class="form-group">
	              <input type="text" class="form-control" value="{{ $bar->nombre }}" id="nameBar" placeholder="Nombre del bar">
	            </div>
	            	<div class="form-group">
	              	<input type="text" class="form-control" value="{{ $bar->direccion }}" id="address" placeholder="Dirección">
	            	</div>
	            <div class="form-group">
	              <select class="custom-select">
				    <option selected>Elegir ruta de la tapa</option>
				    @foreach($rutas as $ruta)
				    	<option 
				    		value="{{ $ruta->nombre }}">
				    		{{ $ruta->nombre }}
				    	</option>
				    @endforeach
			  	  </select>
	            </div>
				<div class="form-group">
					<input type="text" class="form-control" id="nameTapa" placeholder="Nombre de la tapa">
				</div>
	            <div class="form-group">
	            	<label>Foto de la tapa</label>
	              <input type="file" class="form-control" id="archivo" placeholder="">
	            </div>

                <button type="button" class="btn btn-success">Añadir tapa</button>

	            <button type="submit" class="btn btn-primary">Enviar solicitud</button>
        	</form>

	</div>

@endsection