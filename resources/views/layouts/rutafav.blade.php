<?php use App\Http\Controllers\BaresController;?>

<div class="votecont">
  <div class="chart">
    @foreach($favsid as $fav)
      @if($loop->index < 3)
        <p class="chartPosition{{$loop->index}}"><span class="greyBack"><i class="fas fa-trophy"></i></span><a href="/bar/{{ $fav }}">{{ BaresController::getName($fav) }} y su tapa "{{BaresController::getTapa($fav)}}", {{BaresController::favCount($fav)}} votos</a></p>
      @else
        <p class="chartPosition"><a href="/bar/{{ $fav }}">{{ BaresController::getName($fav) }} {{BaresController::favCount($fav)}} votos</a></p>
      @endif
    @endforeach
  </div>

  <button class="btn btn-success" onclick="setPublish()">Publicar ganadores</button>
</div>

<script>


    function setPublish(){
        $publish = true;
    }
</script>