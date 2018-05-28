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

    <h3>My Google Maps Demo</h3>
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

    <div class="cont">
    	<h2>
    	3ª Ruta de la Tapa de Puzol
    	</h2>
    	<h4>Del 15 al 22 de Julio</h4>
    	<hr>
    	<div class="row">
    		<div class="col-md-4">
    		Primer Premio: 1000€
    		</div>
    		<div class="col-md-4">
    		Segundo Premio: 500€
    		</div>
    		<div class="col-md-4">
    		Tercer Premio: 200€
    		</div>
    	</div>
    	<div class="description">
    		Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).
    	</div>

    	<div class="card-columns">
		  <div class="card">
		    <img class="card-img-top" src="/img/CasaBayarri.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Fruta de la pasión</h5>
		      <p class="card-text">Bar Manolo</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="/img/Laiguafresca.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Postre en almibar</h5>
		      <p class="card-text">Bar Selecto</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Card title</h5>
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		    </div>
		  </div>
		</div>
    </div>
   
<footer class="cont">
  <p>© Taparouting 2017-2018</p>
</footer>
</body>

</html>