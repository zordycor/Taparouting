<?php use App\Http\Controllers\BaresController;?>
<div class="votecont">
  <div class="chart">
    @foreach($favsid as $fav)
      @if($loop->index < 3)
        <p class="chartPosition{{$loop->index}}"><span class="greyBack"><i class="fas fa-trophy"></i></span>Bar: {{ BaresController::getName($fav) }}, {{BaresController::favCount($fav)}} votos</p>
      @else
        <p class="chartPosition">Bar: {{ BaresController::getName($fav) }}, {{BaresController::favCount($fav)}} votos</p>
      @endif
    @endforeach
  </div>

  <button class="btn btn-success">Publicar ganadores</button>
</div>