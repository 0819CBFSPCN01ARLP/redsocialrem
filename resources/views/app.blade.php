<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>REM | @yield("title")</title>
    <!-- Iconos -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    {{-- <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script> --}}
    {{-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> --}}
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/locales/(lang).js"></script> --}}


  </head>



@php
    use Illuminate\Database\Eloquent\Model;
@endphp
  <body>

    <header class="jumbotron-fluid">
      @guest
        <nav>
          <a class="menuLink nav-link" href="/login">Login</a>
          <a class="menuLink nav-link" href="{{url('/register')}}">Registro</a>
        </nav>

      @else
        <nav>
          <a class="" href={{url('/home')}}>
            <img class="logo float-left" src="/logo.png" alt="logo">
          </a>
          <button  class="navbar-toggler menuLink float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav">
              <a class="menuLink nav-link" href={{url('/miperfil')}}><ion-icon name="contact"></ion-icon>Mi Perfil</a>
              <a class="menuLink nav-link" href={{url('/amigos')}}><ion-icon name="contacts"></ion-icon>Amigos</a>
              <a class="menuLink nav-link" href={{url('/usuarios')}}><i class="fas fa-user-edit"></i>Usuarios</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style ="padding-top:10px" class="">
                @csrf
                <button class="btn btn-dark" type="submit" name="salir">
                  Cerrar sesión
                </button>
              </form>
            </div>
          </div>
        </nav>
      @endguest
    </header>
    <br><br>

    @yield("content")

    <br><br>
    <footer class="jumbotron-fluid">
      <nav class="nav justify-content-center">
        <a class="nav-link menuLink" href="{{url ('/preguntas-frecuentes')}}"><ion-icon name="help"></ion-icon>Preguntas Frecuentes</a>
        <a class="nav-link menuLink" href="{{url ('/contacto')}}"><ion-icon name="mail"></ion-icon>Contacto</a>
      </nav>
    </footer>

    <script type="text/javascript" src="/js/validaciones.js"></script>

  </body>

</html>
