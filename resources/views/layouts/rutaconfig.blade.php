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
        <ul id="parentPills" class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link @if($tab0 == 0) active @endif" data-toggle="pill" href="#conf" data-num="0">Información</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($tab0 == 1) active @endif" data-toggle="pill"  href="#solicitudes"  data-num="1">Solicitudes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($tab0 == 2) active @endif" data-toggle="pill" href="#votaciones"  data-num="2">Votaciones</a>
            </li>
        </ul>

        <div class="tab-content">

            @include('layouts.rutaedit')

            <div id="solicitudes" class="tab-pane   @if($tab0 == 1) active show @else fade @endif">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link @if($tab1 == 0) active @endif" data-toggle="tab"  data-num="0" href="#todas">Todas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($tab1 == 1) active @endif" data-toggle="tab"  data-num="1" href="#aceptadas">Aceptadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($tab1 == 2) active @endif" data-toggle="tab"  data-num="2" href="#noresponder">Sin responder</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="todas" class="tab-pane  @if($tab1 == 0) active show @else fade @endif">
                        @include('layouts.cards', ['filter' => "all"])
                    </div>

                    <div id="aceptadas" class="tab-pane  @if($tab1 == 1) active show @else fade @endif">
                        @include('layouts.cards', ['filter' => "accept"])
                    </div>

                    <div id="noresponder" class="tab-pane  @if($tab1 == 2) active show @else fade @endif">
                        @include('layouts.cards', ['filter' => "deny"])
                    </div>
                </div>
            </div>

            <div id="votaciones" class="tab-pane   @if($tab0 == 2) active show @else fade @endif">
                @include('layouts.rutafav')
            </div>
        </div>
    </div>
</div>