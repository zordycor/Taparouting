@extends('templates.master')
@section('main')

<div class="cont contBar">
    <a href="/"><i class="fas fa-angle-left"></i></a>
    <div class="firstBlock" unselectable="on">
        <div class="bg fade-slide-left"></div>
        <div class="row">
            <div class="bg-row"></div>
            <div class="title">
                <h1>
                    @auth<i class="far fa-heart js-fav"></i>@endauth
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