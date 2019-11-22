@extends('app')

@section("title")
  Login
@endsection

@section("css")
  "/css/registro.css"
@endsection

@section('content')
    <h1 class = "text-center"><em>INICIAR SESIÓN</em></h1>

    <div class="modal-dialog text-center">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <img class="col-sm-8 col-md-8 col-lg-10" src="logo.png" alt="">
      </div>
    </div>

    <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="form-group row justify-content-center">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group mb-2 row justify-content-center">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-check row mb-4 justify-content-center">
        <label class="col-12 text-center form-check-label" for="recordarme">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          Recordarme
        </label>
      </div>
      <div class="row justify-content-center">
        <button style = "background-color:#464655" type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
    </form>
@endsection
