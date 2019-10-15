<header class="jumbotron-fluid">
  <nav>
    <img style = "margin-left :20px" class="logo float-right" src="img/logo.png" alt="logo">
    <button  class="navbar-toggler menuLink" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <form style ="padding-top:10px" class="float-right" action="index.php" method="post">
      <button class="btn btn-dark" type="submit" name="salir">
        Cerrar sesión
      </button>
    </form>
    <div class="col-4 float-right">
      <a class="col-10 d-none d-sm-block float-right menuLink nav-link" href="buscar.php"><ion-icon name="search"></ion-icon>Buscar</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav">
        <a class="menuLink nav-link" href="perfil.php"><ion-icon name="contact"></ion-icon>Mi Perfil</a>
        <a class="menuLink nav-link" href="amigos.php"><ion-icon name="contacts"></ion-icon>Amigos</a>
        <a class="menuLink nav-link" href="home.php"><ion-icon name="home"></ion-icon>Home</a>
      </div>
    </div>
  </nav>
</header>
