<div class="filtros">
    <span class="active">TODO</span>
    <span>VEGANO</span>
    <span>PARA CELIACOS</span>
    <span>DULCE</span>
    <span>SALADO</span>
</div>

<div class="card-columns">
    @foreach($bares as $bar)
    <div class="card">
        <div class="card-cont">
            <a href="/bar/{{ $bar->id }}">
                <img class="card-img-top" src="/img/{{$bar->tapaimg}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <div class="etiquetas">
                    <span>VEGANO</span>
                    <span>DULCE</span>
                </div>

                <h4 class="card-title"><strong>{{$bar->tapanom}}</strong></h4>
                <hr class="cardSeparator">
                <p class="card-bar"><a href="/bar/{{$bar->id}}">{{$bar->nombre}}</a></p>
                <p class="card-description">{{ $bar->tapadesc }}</p>
            </div>
        </div>
    </div>
    @endforeach

</div>