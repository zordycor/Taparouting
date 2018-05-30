<h2>Panel de configuración</h2>
<hr>
<form>
    <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Nombre de la ruta">
    </div>
    <div class="row">
        <div class="form-group">
            <label>Inicio de la ruta</label>
            <input type="date" class="form-control" id="inicio" placeholder="">
        </div>
        <div class="form-group">
            <label>Fin de la ruta</label>
            <input type="date" class="form-control" id="inicio" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <input type="number" class="form-control" id="first" placeholder="Primer premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="second" placeholder="Segundo premio">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="third" placeholder="Tercer premio">
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="description" placeholder="Descripción de la ruta">
    </div>
    <div class="form-group">
        <label>Elige el color de tu ruta:</label>
        <input type="color" name="colorSelect" value="#ff0000">
    </div>
    <div class="form-group">
        <label>Elige el color del texto:</label>
        <input type="color" name="colorSelect" value="#ff0000">
    </div>
    <div class="form-group">
        <label>Logo de la ruta</label>
        <input type="file" class="form-control" id="archivo" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>