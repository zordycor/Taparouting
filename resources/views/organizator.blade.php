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
    	<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="conf-tab" data-toggle="tab" href="#conf" role="tab" aria-controls="conf" aria-selected="true">Configuración</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="solicitudes-tab" data-toggle="tab" href="#solicitudes" role="tab" aria-controls="solicitudes" aria-selected="false">Solicitudes</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="activas-tab" data-toggle="tab" href="#activas" role="tab" aria-controls="activas" aria-selected="false">Activas</a>
		  </li>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="conf" role="tabpanel" aria-labelledby="conf-tab">
		  	<h2>Panel de configuración</h2>
    		<hr>
    		<form>
	            <div class="form-group">
	              <input type="text" class="form-control" id="name" placeholder="Nombre de la ruta">
	            </div>
	            <div class="row">
		            <div class="form-group">
		            	<label>Inicio de la ruta</label>
		              <input type="date" class="form-control" id="inicio" placeholder="">
		            </div>
		            <div class="form-group">
		            	<label>Fin de la ruta</label>
		              <input type="date" class="form-control" id="inicio" placeholder="">
		            </div>
	            </div>
	            <div class="row">
	            	<div class="form-group">
	              	<input type="number" class="form-control" id="first" placeholder="Primer premio">
	            	</div>
	            	<div class="form-group">
	              	<input type="number" class="form-control" id="second" placeholder="Segundo premio">
	            	</div>
	            	<div class="form-group">
	              	<input type="number" class="form-control" id="third" placeholder="Tercer premio">
	            	</div>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" id="description" placeholder="Descripción de la ruta">
	            </div>
	            <div class="form-group">
	            	<label>Elige el color de tu ruta:</label>
	              <input type="color" name="colorSelect" value="#ff0000">
	            </div>
	            <div class="form-group">
	            	<label>Elige el color del texto:</label>
	              <input type="color" name="colorSelect" value="#ff0000">
	            </div>
	            <div class="form-group">
	            	<label>Logo de la ruta</label>
	              <input type="file" class="form-control" id="archivo" placeholder="">
	            </div>
	            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        	</form>
		  </div>
		  <div class="tab-pane fade" id="solicitudes" role="tabpanel" aria-labelledby="solicitudes-tab">
		  	<div class="card-deck">
			  	<div class="card">
			    <img class="card-img-top" src="/img/CasaBayarri.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Fruta de la pasión</h5>
			      <p class="card-text">Bar Manolo</p>
			    </div>
			    <div class="card-body buttons">
	   			 	<a href="#" class="btn btn-success">Aceptar</a>
	   				<a href="#" class="btn btn-danger">Denegar</a>
	  			</div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/img/Laiguafresca.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Postre en almibar</h5>
			      <p class="card-text">Bar Selecto</p>
			    </div>
			    <div class="card-body buttons">
	   			 	<a href="#" class="btn btn-success">Aceptar</a>
	   				<a href="#" class="btn btn-danger">Denegar</a>
	  			</div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Card title</h5>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			    </div>
			    <div class="card-body buttons">
	   			 	<a href="#" class="btn btn-success">Aceptar</a>
	   				<a href="#" class="btn btn-danger">Denegar</a>
	  			</div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Card title</h5>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			    </div>
			    <div class="card-body buttons">
	   			 	<a href="#" class="btn btn-success">Aceptar</a>
	   				<a href="#" class="btn btn-danger">Denegar</a>
	  			</div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Card title</h5>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			    </div>
			    <div class="card-body buttons">
	   			 	<a href="#" class="btn btn-success">Aceptar</a>
	   				<a href="#" class="btn btn-danger">Denegar</a>
	  			</div>
			  </div>
			  </div>
			  </div>
		  <div class="tab-pane fade" id="activas" role="tabpanel" aria-labelledby="activas-tab">...</div>
		</div>
    </div>

<footer class="cont">
  <p>© Taparouting 2017-2018</p>
</footer>
</body>

</html>