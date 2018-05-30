@extends('templates.master')

@section('main')
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
      @include('layouts.cards')

@endsection

