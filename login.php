<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <title>Login</title>
  </head>

<!-- encabezado -->
<header class="jumbotron-fluid bg-primary">
    <a id="registrate" href="registro.php">Registrate</a>
</header>

<!-- Formulario de ingreso -->
<body>
  <h1 class = "text-center col-12 col-md-12">INICIAR SESIÓN</h1>

  <br>

  <div class="container">
    <form class="" action="home.php" method="post">
      <div class="form-group row justify-content-center">
          <label class="col-5" for="Email">Email</label>
          <input class="col-4" id="Email" type="Email" name="Email" value="">
      </div>

      <br>

      <div class="form-group row justify-content-center">
        <label class="col-5" for="Contreseña">Cotraseña</label>
        <input class ="col-4"id="Contraseña" type="password" name="password" value="">
      </div>
      <br>
      <div class="row justify-content-center">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
    </form>
  </div>
</body>

<!-- Pie de pagina -->
<footer class="jumbotron-fluid bg-primary">
    <nav class="nav justify-content-center">
      <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
      <a class="nav-link" href="contacto.php">Contacto</a>
    </nav>
</footer>

</html>
