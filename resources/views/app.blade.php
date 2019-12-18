<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>REM | @yield("title")</title>
  <!-- Iconos -->
  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/9732a55196.js" crossorigin="anonymous"></script>
  <!-- Hojas de estilo -->
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href=@yield("css")>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/piexif.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/sortable.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/plugins/purify.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/fileinput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/themes/fa/theme.js"></script>

</head>

@php
use Illuminate\Database\Eloquent\Model;
@endphp
<body>
  <header class="d-block sticky-top">
    @guest
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <a class="navbar-brand p-0 mb-1" href="{{url('/home')}}"><img class="logo float-left" src="/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link active" href="/login">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="{{url('/register')}}">Registro</a>
              </li>
            </ul>
          </div>
        </nav>

    @else
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <a class="navbar-brand p-0 mb-1" href="{{url('/home')}}"><img class="logo float-left" src="/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="{{url('/miperfil')}}">Mi perfil</a>
                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style ="padding-top:10px" class="">
                  @csrf
                  <input class="btn btn-link out" type="submit" name="salir" value="Cerrar sesión">
                </form>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{url('/amigos')}}">Amigos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{url('/usuarios')}}">Usuarios</a>
            </li>
          </ul>
        </div>
      </nav>

    @endguest
  </header>

  @yield("content")


  <footer class="d-block">
    <nav class="nav justify-content-center navbar-dark bg-dark">
      <a class="nav-link menuLink" href="{{url ('/preguntas-frecuentes')}}">Preguntas Frecuentes</a>
      <a class="nav-link menuLink" href="{{url ('/contacto')}}">Contacto</a>
    </nav>
  </footer>

  <script type="text/javascript" src="/js/validaciones.js"></script>

</body>

</html>
