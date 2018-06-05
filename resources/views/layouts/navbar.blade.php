
<nav class="navbar navbar-expand-md navbar-red navbar-light fixed-top">
    <a class="navbar-brand" href="">Taparouting</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/ruta/1">Mi ruta <span class="sr-only">(current)</span></a>
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

        <div class="btn-group">
            <button 
                class="btn btn-outline-warning dropdown-toggle my-2 my-sm-0" 
                data-toggle="dropdown" 
                id="login" 
                aria-haspopup="true" 
                aria-expanded="false">
                    Iniciar sesión
            </button>

            <form class="dropdown-menu" aria-labelledby="login">
              <div class="form-group form-login">
                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Email">
              </div>
              <div class="form-group form-login">
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>
</nav>
