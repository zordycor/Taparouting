<!DOCTYPE html>
<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ruta</title>

    <!-- Bootstrap core CSS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Local CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Animations -->
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  
  </head>

<body>

  <nav class="navbar navbar-expand-md navbar-red navbar-light fixed-top">
	  <a class="navbar-brand" href="#">Taparouting</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Calendario</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Rutas</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
	</form>
	      <button class="btn btn-outline-warning my-2 my-sm-0">Iniciar sesión</button>
	  </div>
    </nav>

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

<footer class="cont">
  <p>© Taparouting 2017-2018</p>
</footer>

</body>
</html>