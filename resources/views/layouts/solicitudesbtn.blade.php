<div class="buttons">
    <button class="btn btn-success js-accept" onclick="acceptBar({{$bar->id}})">Aceptar</button>
    <button class="btn btn-danger js-deny" onclick="denyBar({{$bar->id}})">Denegar</button>
</div>

<script>
    function acceptBar(id){
        $.ajax({
            url: '/aceptar/'+id,
            success: function(){
                $('.cardList').hide(2000);
            }
        });
    }

    function denyBar(id){
        $.ajax({
            url: '/denegar/'+id,
            success: function(result){
                console.log(result);
            }
        });
    }
</script>