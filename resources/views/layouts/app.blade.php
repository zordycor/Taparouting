<nav class="navbar navbar-default navbar-expand-md fixed-top animate-pop-in">
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto notLoggedNav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <div class="nav-link js-login">Iniciar sesión</div>
                </li>
                <hr>
                <li class="nav-item">
                    <div class="nav-link js-signin">Registrarse</div>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle loggedNav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="far fa-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/config">Panel de control</a>

                        <hr>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Desconectar
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
