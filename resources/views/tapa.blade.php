@extends('templates.master')

@section('main')

    <div id="map_canvas"></div>

<div class="cont">
<h2>{{$tapa->nombre}}</h2>

<h3>{{$tapa->bar}}</h3>

<h4>{{$tapa->ruta}}</h4>
<hr>

<div class="imagenes">
    <img class="tapaimg" src="/img/{{$tapa->img}}">
    <img class="tapaimg" src="/img/{{$tapa->qr}}">
</div>


</div>

<script>
    function initialize() {
        var address = '{{$tapa->bar}}';

        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                var Lng = results[0].geometry.location.lng();
                var myLatlng = new.google.maps.LatLng(Lat, Lng);
                var myOptions = {
                    zoom: 11,
                    center: myLatlng
                };
                var map = new google.maps.Map(
                    document.getElementById("map_canvas"), myOptions);
                var marker = new google.maps.Marker({
                  position: myLatlng,
                  title:"Hello World!"
                });
            } else {
                alert("Something got wrong " + status);
            }
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
</script>

@endsection