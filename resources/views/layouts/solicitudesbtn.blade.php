<div class="buttons">
    <button class="btn btn-success js-accept @if($bar->aceptado == 1) disabled @endif" onclick="actionBar(1,{{$bar->id}})">Aceptar</button>
    <button class="btn btn-danger js-deny @if($bar->aceptado == 0) disabled @endif" onclick="actionBar(0,{{$bar->id}})">Denegar</button>
</div>

<script>
    function actionBar(action,id){
        $.ajax({
            url: '/action/'+action+'/'+id,
            success: function(result){
                if(result){
                    var tab0 = $('#parentPills .nav-link.active').attr('data-num');
                    var tab1 = $('#solicitudes .nav-link.active').attr('data-num');
                    window.location.href = location.protocol + '//' + location.host + location.pathname + '?tab0='+ tab0 +'&tab1='+ tab1;
                }
            }
        });
    }
</script>