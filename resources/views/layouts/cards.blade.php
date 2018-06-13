<div class="filtros">
    <span class="active">TODO</span>
    <span>VEGANO</span>
    <span>PARA CELIACOS</span>
    <span>DULCE</span>
    <span>SALADO</span>
</div>

<div class="card-columns">
    @foreach($tapas as $tapa)
    <div class="card">
        <div class="card-cont">
            <a href="/tapa/{{ $tapa->id }}">
                <img class="card-img-top" src="/img/{{$tapa->img}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <ul class="etiquetas">
                    <li>VEGANO</li>
                    <li>DULCE</li>
                </ul>

                <h4 class="card-title"><strong>{{$tapa->nombre}}</strong></h4>
                <p class="card-bar"><a href="/bar/{{$tapa->bar}}">{{$tapa->bar}}</a></p>
                <hr class="cardSeparator">
                <p class="card-description">{{ $tapa->description }}</p>
                <p style="color: grey"><a href="/ruta/{{$tapa->ruta}}">{{$tapa->ruta}}</a></p>
            </div>
        </div>
    </div>
    @endforeach

</div>