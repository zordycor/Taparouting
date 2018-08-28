@extends('templates.master')
@section('main')
@php
    $conf=false;
@endphp

<div class="cont">
    <a href="{{ URL::previous() }}"><i class="fas fa-angle-left"></i></a>
    <div class="firstBlock">
        <div class="bg fade-slide-left" style="background: url('https://s3.eu-west-3.amazonaws.com/taparouting/rutas/{{ $ruta->localidad }}.jpg') center center no-repeat; background-size: cover;"></div>
        <div class="row">
            <div class="bg-row"></div>
            <div class="title">
                <h1>
                    {{ $ruta->nombre }}
                </h1>
                <h4>Del
                    {{ date('d', strtotime($ruta->inicio)) }} de
                    {{ date('M', strtotime($ruta->inicio)) }} al
                    {{ date('d', strtotime($ruta->fin)) }} de
                    {{ date('M', strtotime($ruta->fin)) }}
                </h4>

                <div class="prizes">
                    <div class="greyBack"><i class="fas fa-trophy" style="color: yellow;"></i> {{ $ruta->price1 }}€</div>
                    <div class="greyBack greyBack--silver"><i class="fas fa-trophy" style="color: silver;"></i> {{ $ruta->price2 }}€</div>
                    <div class="greyBack greyBack--bronze"><i class="fas fa-trophy" style="color: saddlebrown;"></i> {{ $ruta->price3 }}€</div>
                </div>
            </div>
        </div>

        <div class="descMap">
            <div class="description">
                {{ $ruta->description }}
            </div>

            <div id="map_canvas" class="ruta"></div>
        </div>
        @if($bares->count() == 0)
            <div class="noBares">
                <h2 class="text-center">Esta ruta no tiene bares asignados</h2>
            </div>
        @else
        <div class="noBares">
            <h4 class="text-center downBares"><i class="fas fa-angle-down"></i>Bares<i class="fas fa-angle-down"></i></h4>
        </div>
        @endif
    </div>

    @if($bares->count() > 0)
        @include('layouts.cards')
    @endif

</div>


<script>

function mapInit() {

    var i;
    var geocoder = new google.maps.Geocoder();
    var LatLng;

    var map = new google.maps.Map(
        document.getElementById("map_canvas"), {
            zoom: 13
        });

    @if($bares->count() == 0)

        geocoder.geocode({
            'address': "{{$ruta->localidad}}"

        }, function(results, status) {
            if (status == 'OK') {
                map.panTo(results[0].geometry.location);
            } else {
                alert("Something got wrong " + status);
            }
        });



    @else

    var map = new google.maps.Map(
        document.getElementById("map_canvas"));

    var bounds = new google.maps.LatLngBounds();

    @foreach($bares as $bar)
        var address = "{{$bar->nombre}}, {{$bar->direccion}}"

        var content{{$bar->id}} = "<h1>{{$bar->nombre}}</h1>"+
            "<div class='bgInfo'><img src='https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg' alt=''></div>"+
            "<h3>{{$bar->tapanom}}</h3>"+
            "<h4>{{$bar->direccion}}</h4>"+
            "<h4><a class='infowindow_link' href='/bar/{{$bar->id}}'>Más info ></a></h4>";

        var infowindow = new google.maps.InfoWindow();

        geocoder.geocode({
            'address': address

        }, function(results, status) {
            if (status == 'OK') {
                var LatLng = results[0].geometry.location;

                var marker = new google.maps.Marker({
                    position: LatLng,
                    map: map
                });

                google.maps.event.addListener(marker,'click', (function(marker,content{{$bar->id}},infowindow){
                    return function() {
                        map.panTo(marker.getPosition())
                        infowindow.setContent(content{{$bar->id}});
                        infowindow.open(map,marker);
                    }
                })(marker,content{{$bar->id}},infowindow));

                google.maps.event.addListener(map, "click", function(event) {infowindow.close();});

                bounds.extend(marker.position);
                map.fitBounds(bounds);

            } else {
                alert("Something got wrong " + status);
            }
        });

        @endforeach
    @endif
}

</script>

@endsection