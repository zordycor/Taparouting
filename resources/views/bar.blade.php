@extends('templates.master')

@section('main')

    <div class="main-container">
    	<h2>Mi Bar</h2>
    	<hr>
    	<form>
	            <div class="form-group">
	              <input type="text" class="form-control" id="nameBar" placeholder="Nombre del bar">
	            </div>
	            	<div class="form-group">
	              	<input type="text" class="form-control" id="address" placeholder="Dirección">
	            	</div>
	            <div class="form-group">
	              <select class="custom-select">
				    <option selected>Elegir ruta de la tapa</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
			  	  </select>
	            </div>
				<button type="button" class="btn btn-success">Añadir tapa</button>
				<div class="form-group">
					<input type="text" class="form-control" id="nameTapa" placeholder="Nombre de la tapa">
				</div>
	            <div class="form-group">
	            	<label>Foto de la tapa</label>
	              <input type="file" class="form-control" id="archivo" placeholder="">
	            </div>
	            <button type="submit" class="btn btn-primary">Enviar solicitud</button>
        	</form>

	</div>

@endsection