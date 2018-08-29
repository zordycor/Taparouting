@extends('templates.master')
@section('main')

<style>
    body {background-color:white !important;}
</style>

<div class="cont contBar">
    <a href="{{ URL::previous() }}"><i class="fas fa-angle-left"></i></a>
    <div class="firstBlock" unselectable="on">
        <div class="bg fade-slide-left"></div>
        <div class="row">
            <div class="bg-row"></div>
            <div class="title">
                <h1>
                    @auth<i class="@if($favorited) fas @else far @endif fa-heart js-fav" onclick="favBar({{$bar->id}})"></i>@endauth
                    {{ $bar->tapanom }}
                </h1>
                <h4><a href="/ruta/{{$ruta->localidad}}">{{$ruta->nombre}}</a></h4>
                <div class="rowData">
                    <div class="datosBar">
                        <h3>{{ $bar->nombre }}<i class="fas fa-beer"></i></h3>
                        <h3>{{ $bar->direccion }}<i class="fas fa-map-marker-alt"></i></h3>
                        <h3><a href="tel:{{ $bar->telefono }}">{{ $bar->telefono }}<i class="fas fa-phone"></i></a></h3>
                        <div class="horarios">
                            <h4>{{ $bar->horarios }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="imageData">
            <div class="description">
                {{ $bar->tapadesc }}
            </div>
            <img class="tapaimg barView" src="https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg" alt="">
        </div>
        <div id="map_canvas"></div>
    </div>

<script>

    function favBar(id) {
        $('.js-fav.far, .js-fav.fas').toggleClass('far fas');
        $.ajax({
            url: '/togglefav/'+id,
            success: function(result){
                console.log(result);
            }
        });
    }

    function mapInit() {
        var address = '{{ $bar->nombre }}, {{ $bar->direccion }}';
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                var Lng = results[0].geometry.location.lng();
                var myOptions = {
                    zoom: 18,
                    center: new google.maps.LatLng(Lat, Lng)
                };

                var map = new google.maps.Map(
                    document.getElementById("map_canvas"), myOptions);

                var marker = new google.maps.Marker({
                    position: myOptions['center'],
                    map: map
                });

            } else {
                alert("Something got wrong " + status);
            }
        });
    }
</script>


@endsection