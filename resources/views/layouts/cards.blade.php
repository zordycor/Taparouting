
<div class="card-columns">
    @foreach($tapas as $tapa)
        <div class="card">
            <a href="/tapa/{{ $tapa->id }}">
            <img class="card-img-top" src="/img/{{$tapa->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$tapa->nombre}}</h5>
                <p class="card-text">{{$tapa->Bar()->nombre}}</p>
                <p style="color: grey">{{$tapa->Ruta()->nombre}}</p>
            </div>
            </a>
                @include('layouts/solicitudesbtn')
        </div>
    @endforeach

</div>