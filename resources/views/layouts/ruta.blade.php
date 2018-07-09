@extends('templates.master')
@section('main')


<div class="cont">
    <a href="/"><i class="fas fa-angle-left"></i></a>
    <div class="firstBlock">
        <div class="bg fade-slide-left"></div>
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

            <div id="map_canvas"></div>
        </div>
    </div>
    @include('layouts.cards')

</div>


<script>
    function mapInit() {
        var address = '{{ $ruta->localidad }}';
        var addresses = [@foreach($bares as $bar)"{{$bar->direccion}}"@if($loop->last == false),@endif @endforeach];

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