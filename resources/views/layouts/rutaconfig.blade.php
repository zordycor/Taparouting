@extends('templates.master')
@section('main')
@php
$conf=true;
@endphp


<a href="{{ URL::previous() }}"><i class="fas fa-angle-left"></i></a>
<div class="main-container main-container--config">
    <div class="cont-config">
        <div class="title">
            <h1>Panel de configuración</h1>
        </div>
        <hr>
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#conf">Información</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#solicitudes">Solicitudes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#votaciones">Votaciones</a>
            </li>
        </ul>

        <div class="tab-content">

            @include('layouts.rutaedit')

            <div id="solicitudes" class="tab-pane fade">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#todas">Todas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#aceptadas">Aceptadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#noresponder">Sin responder</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="todas" class="tab-pane active show">
                        @include('layouts.cards', ['filter' => "all"])
                    </div>

                    <div id="aceptadas" class="tab-pane fade">
                        @include('layouts.cards', ['filter' => "accept"])
                    </div>

                    <div id="noresponder" class="tab-pane fade">
                        @include('layouts.cards', ['filter' => "deny"])
                    </div>
                </div>
            </div>

            <div id="votaciones" class="tab-pane fade">
                @include('layouts.rutafav')
            </div>
        </div>
    </div>
</div>

<script>

</script>