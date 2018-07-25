@extends('templates.master')
@section('main')
@php
    $conf=false;
@endphp

<div class="cont">
    <a href="/"><i class="fas fa-angle-left"></i></a>
    <div class="firstBlock">
        <div class="bg fade-slide-left" style="background: url('https://s3.eu-west-3.amazonaws.com/taparouting/rutas/{{ $ruta->localidad }}.jpg') center center no-repeat; background-size: cover;"></div>
        <div class="row">
            <div class="bg-row"></div>
            <div class="title">
                <h1>
                    {{ $ruta->nombre }}
                </h1>
                <h4>Del
                    {{ date('d', strtotime($ruta->inicio)) }} al
                    {{ date('d', strtotime($ruta->fin)) }} de
                    {{ date('M', strtotime($ruta->inicio)) }}
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
    </div>
    @include('layouts.cards')

</div>


<script>

    function mapInit() {

        var i;

        var map = new google.maps.Map(
            document.getElementById("map_canvas"));

        var bounds = new google.maps.LatLngBounds();
        var addresses = [
            @foreach($bares as $bar)
                "{{$bar->nombre}}, {{$bar->direccion}}"

                @if($loop->last == false),@endif
            @endforeach];

        var geocoder = new google.maps.Geocoder();
        var infowindow = new google.maps.InfoWindow();

        for(i in addresses){
            geocoder.geocode({
                'address': addresses[i]

            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var Lat = results[0].geometry.location.lat();
                    var Lng = results[0].geometry.location.lng();
                    var LatLng = new google.maps.LatLng(Lat, Lng);

                    var marker = new google.maps.Marker({
                        position: LatLng,
                        map: map
                    });

                    var content = "@if($ruta->related()->count() > 0)<h1>{{$bar->nombre}}</h1>"+
                        "<p><b>{{$bar->tapanom}}</b></p>"+
                        "<p><b>{{$bar->direccion}}</b></p>@endif";

                    google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                        return function() {
                            map.setCenter(marker.getPosition())
                            infowindow.setContent(content);
                            infowindow.open(map,marker);
                        }
                    })(marker,content,infowindow));

                    bounds.extend(marker.position);
                    map.fitBounds(bounds);

                } else {
                    alert("Something got wrong " + status);
                }
            });
        }
    }

</script>

@endsection