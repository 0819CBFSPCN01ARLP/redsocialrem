@extends('app')

@section('content')
  <h1 class = "text-center"><em>INICIAR SESIÓN</em></h1>

    <div class="modal-dialog text-center">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <img class="col-sm-8 col-md-8 col-lg-10" src="img/logo.png" alt="">
      </div>
    </div>
    <form class="" action="login.php" method="post">
      <div class="form-group row justify-content-center">
        <input class="col-6" id="Email" type="Email" name="correo" value="" required placeholder="EMAIL">
      </div>
      <div class="form-group mb-2 row justify-content-center">
        <input class ="col-6"id="Contraseña" type="password" name="pass" value="" required placeholder="contraseña">
      </div>
      <div class="form-check row mb-4 justify-content-center">
        <label class="col-12 text-center form-check-label" for="recordarme">
          <input class="form-check-input" name="recordarme" type="checkbox" id="recordarme" >
          Recordarme
        </label>
      </div>
      <div class="row justify-content-center">
        <button style = "background-color:#464655" type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
    </form>
  </div>
@endsection
