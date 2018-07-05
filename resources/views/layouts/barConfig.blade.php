<h2>Panel de configuración</h2>
<hr>
<form action="/barupdate/{{ $bar->id }}" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $bar->nombre }}" placeholder="Nombre del bar">
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" class="form-control" value="{{ $bar->direccion }}" id="direccion" name="direccion">
    </div>

    <div class="form-group">
        <label for="horarios">Horarios</label>
        <textarea name="horarios" id="" cols="30" rows="5">{{ $bar->horarios }}</textarea>
    </div>

    <div class="form-group">
        <label for="tapa">Nombre de la tapa</label>
        <input type="text" class="form-control" id="tapa" name="tapa" value="{{ $bar->tapanom }}" placeholder="Nombre de la tapa">
    </div>

    <div class="form-group">
        <label for="tapadesc">Descripción de la tapa</label>
        <input type="text" class="form-control" id="tapadesc" name="tapadesc" value="{{ $bar->tapadesc }}" placeholder="Descripción">
    </div>

    <div class="form-group">
        <label for="archivo">Foto de la tapa</label>
        <input type="file" class="form-control" id="archivo" value="{{ $bar->tapaimg }}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>

</form>