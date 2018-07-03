<h2>Panel de configuración</h2>
<hr>
<form action="/rutaupdate" method="post">
    {{ csrf_field() }}
    
    <div class="form-group">
        <input type="text" class="form-control" id="name" value="{{ $ruta->nombre }}" placeholder="Nombre de la ruta">
    </div>

    <div class="row">
        <div class="form-group">
            <label>Inicio de la ruta</label>
            <input type="date" class="form-control" value="{{ $ruta->inicio }}" id="inicio" placeholder="">
        </div>
        <div class="form-group">
            <label>Fin de la ruta</label>
            <input type="date" class="form-control" value="{{ $ruta->fin }}" id="inicio" placeholder="">
        </div>
    </div>

    <label>Premios:</label>
    <div class="row">
        <div class="form-group">
            <input type="number" class="form-control prices" id="first" value="{{ $ruta->price1 }}" placeholder="Primer premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control prices" id="second" value="{{ $ruta->price2 }}" placeholder="Segundo premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control prices" id="third" value="{{ $ruta->price3 }}" placeholder="Tercer premio">
        </div>
    </div>

    <div class="form-group">
        <label>Descripción:</label>
        <input type="text" class="form-control" id="description" value="{{ $ruta->description }}" placeholder="Descripción de la ruta">
    </div>

    <div class="form-group">
        <label>Elige el color de tu ruta:</label>
        <input type="color" name="colorSelect" value="{{ $ruta->navcolor }}">
    </div>
    <div class="form-group">
        <label>Elige el color del texto:</label>
        <input type="color" name="colorSelect" value="{{ $ruta->textcolor }}">
    </div>

    <div class="form-group">
        <label>Logo de la ruta</label>
        <input type="file" class="form-control" id="archivo" value="{{ $ruta->img }}" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>

</form>