@extends('templates.master')
@section('main')


<div class="cont">
    <div class="bg fade-slide-left"></div>
    <div class="row">
        <div class="bg-row"></div>
        <div class="rutaTitle">
            <h2>
                {{ $ruta->nombre }}
            </h2>
            <h4>Del
                {{ date('d', strtotime($ruta->inicio)) }} al
                {{ date('d', strtotime($ruta->fin)) }} de
                {{ date('M', strtotime($ruta->inicio)) }}
            </h4>

                <div class="greyBack"><i class="fas fa-trophy" style="color: yellow;"></i> {{ $ruta->price1 }}€</div>
                <div class="greyBack greyBack--silver"><i class="fas fa-trophy" style="color: silver;"></i> {{ $ruta->price2 }}€</div>
                <div class="greyBack greyBack--bronze"><i class="fas fa-trophy" style="color: saddlebrown;"></i> {{ $ruta->price3 }}€</div>
        </div>
    </div>
        <div class="logo">
            <img class="logoimg" src="/img/{{$ruta->img}}">
        </div>
        <div class="description">
            {{ $ruta->description }}
        </div>
<!--        <div id="map_canvas"></div>-->
</div>
@include('layouts.cards')

<script>
    function initialize() {
        var address = '{{ $ruta->localidad }}';

        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                var Lng = results[0].geometry.location.lng();
                var myOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(Lat, Lng)
                };
                var map = new google.maps.Map(
                    document.getElementById("map_canvas"), myOptions);

            } else {
                alert("Something got wrong " + status);
            }
        });
    }
</script>