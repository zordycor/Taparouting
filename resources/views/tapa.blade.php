@extends('templates.master')

@section('main')

<h3>Nombre de la tapa</h3>
<div id="map_canvas"></div>

<script>
    function initialize() {
        var address = 'Zurich, Ch';

        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': $rutas
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var Lat = results[0].geometry.location.lat();
                var Lng = results[0].geometry.location.lng();
                var myOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(Lat, Lng)
                };
                var map = new google.maps.Map(
                    document.getElementById("map_canvas"), myOptions);
            } else {
                alert("Something got wrong " + status);
            }
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
</script>

@endsection