@extends('templates.master')
@section('main')

    <div class="main-container animate fade-slide-down contBar">
        <a href=""><i class="fas fa-angle-left"></i></a>
            <img class="tapaimg barView" src="/img/{{ $bar->tapaimg }}" alt="">
            <div class="row rowText">
                <div class="title">
                    <h2>{{$bar->tapanom}}</h2>
                    <h4><a href="/ruta/{{ $ruta->localidad }}">{{ $ruta->nombre }}</a></h4>
                </div>
            </div>

            <div class="row rowData">
                <div class="datosBar">
                    <h4>{{ $bar->nombre }}</h4>
                    <h4>{{ $bar->direccion }}</h4>
                    <h4>{{ $bar->horarios }}</h4>
                </div>
            </div>
        <div class="descMap">
            <div id="map_canvas"></div>
        </div>
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


@endsection