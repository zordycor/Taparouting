@if($conf)
<div class="row row--cards">
    @if($filter == "all")
    @foreach($bares as $bar)
        <div class="cardList">
            <div class="card-cont">
                <a href="/bar/{{ $bar->id }}">
                    <div class="card-img">
                        <i class="fas fa-check" @if($bar->aceptado == 0) style="display: none;" @endif></i>
                        <i class="fas fa-times" @if($bar->aceptado == 1) style="display: none;" @endif></i>
                        <img class="card-img-top" src="https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Tapa: <strong>{{$bar->tapanom}}</strong></h4>
                        <p class="card-description">{{ $bar->tapadesc }}</p>
                        <p class="card-bar">Bar: <strong>{{$bar->nombre}}</strong><span class="separator"></span>{{$bar->direccion}} <span class="separator"></span>{{$bar->telefono}}</p>
                        <p class="card-bar">{{$bar->horarios}}</p>
                    </div>
                </a>
                @include('layouts.solicitudesbtn')
            </div>
        </div>
    @endforeach
    @endif

    @if($filter == "accept")
    @foreach($bares as $bar)
    @if($bar->aceptado == 1)
    <div class="cardList">
        <div class="card-cont">
            <a href="/bar/{{ $bar->id }}">
                <div class="card-img">
                    <i class="fas fa-check" @if($bar->aceptado == 0) style="display: none;" @endif></i>
                    <img class="card-img-top" src="https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Tapa: <strong>{{$bar->tapanom}}</strong></h4>
                    <p class="card-description">{{ $bar->tapadesc }}</p>
                    <p class="card-bar">Bar: <strong>{{$bar->nombre}}</strong><span class="separator"></span>{{$bar->direccion}} <span class="separator"></span>{{$bar->telefono}}</p>
                    <p class="card-bar">{{$bar->horarios}}</p>
                </div>
            </a>
            @include('layouts.solicitudesbtn')
        </div>
    </div>
    @endif
    @endforeach
    @endif

    @if($filter == "deny")
    @foreach($bares as $bar)
    @if($bar->aceptado == 0)
    <div class="cardList">
        <div class="card-cont">
            <a href="/bar/{{ $bar->id }}">
                <div class="card-img">
                    <i class="fas fa-times" @if($bar->aceptado == 1) style="display: none;" @endif></i>
                    <img class="card-img-top" src="https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Tapa: <strong>{{$bar->tapanom}}</strong></h4>
                    <p class="card-description">{{ $bar->tapadesc }}</p>
                    <p class="card-bar">Bar: <strong>{{$bar->nombre}}</strong><span class="separator"></span>{{$bar->direccion}} <span class="separator"></span>{{$bar->telefono}}</p>
                    <p class="card-bar">{{$bar->horarios}}</p>
                </div>
            </a>
            @include('layouts.solicitudesbtn')
        </div>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endif

@if(!$conf)
<div class="row row--cards">
    @foreach($bares as $bar)
        <div class="col-sm-4 card-full">
            <div class="card">
                <a href="/bar/{{ $bar->id }}">
                    <div class="card-cont">
                        <div class="card-img">
                            <img class="card-img-top" src="https://s3.eu-west-3.amazonaws.com/taparouting/tapas/{{ $bar->id }}.jpg" alt="Card image cap">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"><strong>{{$bar->tapanom}}</strong></h4>
                            <hr class="cardSeparator">
                            <p class="card-bar">{{$bar->nombre}}</p>
                            <p class="card-description">{{ $bar->tapadesc }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
@endif