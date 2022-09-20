@csrf
<div class="row">

    <div class="col-sm-12">
        <label for="InputNombres" class="form-label">Nombres</label>
        <input type="text" name="nombres" id="InputNombres" class="form-control" placeholder="Campo Obligatorio" value="{{ old('nombres', $cliente->nombres) }}" >
    </div>

    <div class="col-sm-12">
        <label for="InputApellidos" class="form-label">Apellidos</label>
        <input type="text" name="apellidos" id="InputApellidos" class="form-control" placeholder="Campo Obligatorio" value="{{ old('apellidos', $cliente->apellidos) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputDireccion" class="form-label">Dirección</label>
        <input type="text" name="direccion" id="InputDireccion" class="form-control" placeholder="Campo Obligatorio" value="{{ old('direccion', $cliente->direccion) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputTelefono" class="form-label">Teléfono</label>
        <input type="number" name="telefono" id="InputTelefono" class="form-control" placeholder="Campo Obligatorio" value="{{ old('telefono',$cliente->telefono) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputSexo" class="form-label">Sexo</label>
        <input type="text" name="sexo" id="InputSexo" class="form-control" placeholder="Campo Obligatorio" value="{{ old('sexo',$cliente->sexo) }}">
    </div>

    <div class="col-sm-12">
        <label for="InputCorreo" class="form-label">Correo</label>
        <input type="email" name="correo" id="InputCorreo" class="form-control" placeholder="Campo Obligatorio" value="{{ old('correo', $cliente->correo) }}">
    </div>
 
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">
            Guardar
        </button>
    </div>
</div>