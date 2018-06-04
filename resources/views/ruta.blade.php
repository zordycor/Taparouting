@extends('templates.master')

@section('main')

    <h3>My Google Maps Demo</h3>
    <div id="map_canvas"></div>
    <div class="cont">
    	<h2>
    	3ª Ruta de la Tapa de Puzol
    	</h2>
    	<h4>Del 15 al 22 de Julio</h4>
    	<hr>
    	<div class="row">
    		<div class="col-md-4">
    		Primer Premio: 1000€
    		</div>
    		<div class="col-md-4">
    		Segundo Premio: 500€
    		</div>
    		<div class="col-md-4">
    		Tercer Premio: 200€
    		</div>
    	</div>
    	<div class="description">
    		Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).
    	</div>

    	@include('layouts.cards')
    </div>

<script>
    function initialize() {
        var address = '{{ $ruta->localidad }}';

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