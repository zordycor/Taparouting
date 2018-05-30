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

        	<div class="littleMap">
			    <div id="map"></div>
			    <script>
			      function initMap() {
			        var uluru = {lat: -25.363, lng: 131.044};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 4,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMm2U7fxy_7eFagnOy9dFysRdF7SZPhxg&callback=initMap">
			    </script>
			</div>
    </div>

@endsection