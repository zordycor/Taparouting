<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taparouting</title>

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


      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="main-container">
        <div class="row">
          <div class="welcome">
              <form>
                <div class="form-group">
                  <h4>
                    ¡Regístrate y empieza a votar tus tapas favoritas!
                  </h4>
                  <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password1" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password2" placeholder="Repetir contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
              </form>
          </div>
          <div class="calendarCont">
            <ul class="calendar">
                <li>18/05 Ruta de la tapa <strong>Benetusser</strong></li>
                <li>23/07 Ruta de la tapa <strong>Puzol</strong></li>
            </ul>
          </div>
        </div>
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

        <hr>

    <footer class="cont">
      <p>© Taparouting 2017-2018</p>
    </footer>
    
</body></html>