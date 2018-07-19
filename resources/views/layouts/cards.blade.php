<!--<div class="filtros">-->
<!--    <span class="active">TODO</span>-->
<!--    <span>VEGANO</span>-->
<!--    <span>PARA CELIACOS</span>-->
<!--    <span>DULCE</span>-->
<!--    <span>SALADO</span>-->
<!--</div>-->

<div class="row row--cards">
    @foreach($bares as $bar)
    <div class="col-sm-4 card-full">
        <div class="card">
            <a href="/bar/{{ $bar->id }}">
                <div class="card-cont">
                    <div class="card-img">
                        <img class="card-img-top" src="/img/{{$bar->tapaimg}}" alt="Card image cap">
                    </div>

                    <div class="card-body">
    <!--                    <div class="etiquetas">-->
    <!--                        <span>VEGANO</span>-->
    <!--                        <span>DULCE</span>-->
    <!--                    </div>-->

                        <h4 class="card-title"><strong>{{$bar->tapanom}}</strong></h4>
                        <hr class="cardSeparator">
                        <p class="card-bar">{{$bar->nombre}}</p>
                        <p class="card-description">{{ $bar->tapadesc }}</p>
                    </div>
                    @if($conf)
                    @include('layouts/solicitudesbtn')
                    @endif
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>