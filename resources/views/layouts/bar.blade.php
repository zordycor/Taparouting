@extends('templates.master')
@section('main')

    <div class="cont">
        <div class="bg" style="background: url('/img/{{ $bar->tapaimg }}') center center no-repeat; background-size: cover;" ></div>
        <a href=""><i class="fas fa-angle-left"></i></a>
        <div class="row rowText">
            <div class="title">
                <h2>{{$bar->tapanom}}</h2>
                <h4 style="color: darkgrey;">{{ $bar->ruta_id }}</h4>
            </div>
        </div>
        <div class="row rowData">
            <div class="datosBar">
                <h4>{{ $bar->nombre }}</h4>
                <h4>{{ $bar->direccion }}</h4>
                <h4>{{ $bar->horarios }}</h4>
            </div>
        </div>
        <div id="map_canvas"></div>
    </div>


<script>
    function initialize() {
        var address = '{{ $bar->direccion }}';

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