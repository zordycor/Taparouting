
<h1>Panel de configuración</h1>

<form action="/ruta/{{ $ruta->localidad }}" method="POST" role="form">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <input type="text" class="form-control" name="nombre" value="{{ $ruta->nombre }}" placeholder="Nombre de la ruta">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="localidad" value="{{ $ruta->localidad }}" placeholder="Localidad">
    </div>

    <div class="row">
        <div class="form-group">
            <label>Inicio de la ruta</label>
            <input type="date" class="form-control" name="inicio" value="{{ $ruta->inicio }}" id="inicio" placeholder="">
        </div>
        <div class="form-group">
            <label>Fin de la ruta</label>
            <input type="date" class="form-control" name="fin" value="{{ $ruta->fin }}" id="inicio" placeholder="">
        </div>
    </div>

    <label>Premios:</label>
    <div class="row">
        <div class="form-group">
            <input type="number" class="form-control prices" name="price1" id="first" value="{{ $ruta->price1 }}" placeholder="Primer premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control prices" name="price2" id="second" value="{{ $ruta->price2 }}" placeholder="Segundo premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control prices" name="price3" id="third" value="{{ $ruta->price3 }}" placeholder="Tercer premio">
        </div>
    </div>

    <div class="form-group">
        <label>Descripción:</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ $ruta->description }}" placeholder="Descripción de la ruta">
    </div>

    <div class="form-group">
        <label>Elige el color de tu ruta:</label>
        <input type="color" name="navcolor" value="{{ $ruta->navcolor }}">
    </div>
    <div class="form-group">
        <label>Elige el color del texto:</label>
        <input type="color" name="textcolor" value="{{ $ruta->textcolor }}">
    </div>

    <div class="form-group">
        <label>Logo de la ruta</label>
        <input type="file" class="form-control" name="img" id="archivo" value="{{ $ruta->img }}" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>

</form>