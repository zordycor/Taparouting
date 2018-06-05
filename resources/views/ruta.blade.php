@extends('templates.master')

@section('main')

    <div id="map_canvas"></div>
    <div class="cont">
    	<h2>
    	{{ $ruta->nombre }}
    	</h2>
    	<h4>Del 
            {{ date('d', strtotime($ruta->inicio)) }} al
            {{ date('d', strtotime($ruta->fin)) }} de
            {{ date('M', strtotime($ruta->inicio)) }}
        </h4>
    	<hr>
    	<div class="row">
    		<div class="col-md-4">
    		Primer Premio: {{ $ruta->price1 }}€
    		</div>
    		<div class="col-md-4">
    		Segundo Premio: {{ $ruta->price2 }}€
    		</div>
    		<div class="col-md-4">
    		Tercer Premio: {{ $ruta->price3 }}€
    		</div>
    	</div>
    	<div class="description">
            {{ $ruta->description }}
        </div>

    	@include('layouts.cards')
    </div>

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
    google.maps.event.addDomListener(window, "load", initialize);
</script>

@endsection