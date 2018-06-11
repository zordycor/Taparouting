
<div class="card-columns">
    @foreach($tapas as $tapa)
        <div class="card">
            <a href="/tapa/{{ $tapa->id }}">
            <img class="card-img-top" src="/img/{{$tapa->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$tapa->nombre}}</h5></a>
                <p class="card-text"><a href="/bar/{{$tapa->bar}}">{{$tapa->bar}}</a></p>
                <p style="color: grey"><a href="/ruta/{{$tapa->ruta}}">{{$tapa->ruta}}</a></p>
            </div>
                @include('layouts/solicitudesbtn')
        </div>
    @endforeach

</div>