@extends('templates.master')

@section('main')

    <div class="main-container">
    	<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="conf-tab" data-toggle="tab" href="#conf" role="tab" aria-controls="conf" aria-selected="true">Configuración</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="solicitudes-tab" data-toggle="tab" href="#solicitudes" role="tab" aria-controls="solicitudes" aria-selected="false">Solicitudes</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="activas-tab" data-toggle="tab" href="#activas" role="tab" aria-controls="activas" aria-selected="false">Mi ruta</a>
		  </li>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="conf" role="tabpanel" aria-labelledby="conf-tab">
              @include('layouts.config')
		  </div>
		  <div class="tab-pane fade" id="solicitudes" role="tabpanel" aria-labelledby="solicitudes-tab">
              @include('layouts.cards')
          </div>
		  <div class="tab-pane fade" id="activas" role="tabpanel" aria-labelledby="activas-tab">
		  	@include('layouts.ruta')
		  </div>
		</div>
    </div>

@endsection