@extends('app')

@section('content')
  <form action="registro.php" method="post">
    <div class="form-group row justify-content-center">
      <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputNombre">Nombre</label>
      <input name="nombre" type="text" class="form-control col-5" id="inputNombre" value="" required>
    </div>
    <div class="form-group row justify-content-center">
      <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputApellido">Apellido</label>
      <input name="apellido" type="text" class="form-control col-5" id="inputApellido" value="" required>
    </div>
    <div class="form-group row justify-content-center">
      <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputEmail">Correo electrónico</label>
      <input name="correo" type="email" class="form-control col-5" id="inputEmail" value="" required>
    </div>
    <div class="form-group row justify-content-center">
      <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputContra">Contraseña</label><br>
      <input name="pass" type="password" class="form-control col-5" id="inputContra" required>
    </div>
    <div class="form-check row mb-4 justify-content-center">
      <label class="col-12 text-center form-check-label" for="recordarme">
        <input class="form-check-input" name="recordarme" type="checkbox" id="recordarme">
        Recordarme
      </label>
    </div>
    <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </form>
@endsection()
