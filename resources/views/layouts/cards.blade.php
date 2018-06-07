
<div class="card-columns">
    {{--@foreach($tapas as $tapa)
        <div class="card">
            <img class="card-img-top" src="/img/{{$tapa->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$tapa->nombre}}</h5>
                <p class="card-text">{{$tapa->bar}}</p>
                <p style="color: grey">{{$tapa->ruta}}</p>
            </div>
        </div>
    @endforeach--}}

    <div class="card">
        <img class="card-img-top" src="/img/CasaBayarri.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fruta de la pasión</h5>
            <p class="card-text">Bar Manolo</p>
            <p style="color: darkgrey">Ruta de la tapa de Puzol</p>
        </div>
        @include('layouts/solicitudesbtn')
    </div>
    
    <div class="card">
        <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="/img/Sambori.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
</div>