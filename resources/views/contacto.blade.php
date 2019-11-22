@extends('app')

@section("title")
  Contacto
@endsection

@section("css")
  "/css/contacto.css"
@endsection

@section('content')

  <h1 class="text-center"><em>CONTACTO</em></h1>

  <form class="" action="contacto.php" method="post">
    <div class="form-group row justify-content-center">
      <input name="correo" type="email" class="form-control col-5" id="inputEmail" value="" required placeholder="EMAIL">
    </div>
    <div class="form-group row justify-content-center">
      <textarea name="text" class="form-control col-5" id="inputMensaje" rows="3" required>MENSAJE</textarea>
    </div>
    <div class="row justify-content-center">
      <button style="background-color:#464655;" type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form><br>
@endsection
