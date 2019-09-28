<?php
  require_once("php/validaciones.php");
  require_once("php/usuarios.php");
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>REM</title>
  </head>
  <body>
    <header class="jumbotron-fluid bg-primary">
      <a href="login.php">Login</a>
    </header>

    <h1 class="text-center">REGISTRO</h1>

    <?php
      if ($_POST) {
        $errores = [];
        $errores[] = nombre();
        $errores[] = apellido();
        $errores[] = correo();
        $errores[] = pass();
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $correo = trim($_POST["correo"]);

        nuevoUsuario();

        foreach ($errores as $error) {
          echo $error;
        }
        if ($errores == ["", "", "", ""]) {
          $_SESSION["correo"] = $_POST["correo"];
          header("Location: configuracion.php");
          exit;
        }
      }
     ?>
    <form action="registro.php" method="post">
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputNombre">Nombre</label>
        <input name="nombre" type="text" class="form-control col-5" id="inputNombre" value="<?=$nombre; ?>" required>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputApellido">Apellido</label>
        <input name="apellido" type="text" class="form-control col-5" id="inputApellido" value="<?=$apellido; ?>" required>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputEmail">Correo electrónico</label>
        <input name="correo" type="email" class="form-control col-5" id="inputEmail" value="<?=$correo; ?>" required>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputContra">Contraseña</label><br>
        <input name="pass" type="password" class="form-control col-5" id="inputContra" required>
      </div>
      <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </div>
    </form>

    <footer class="jumbotron-fluid bg-primary">
      <nav class="nav justify-content-center">
        <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
        <a class="nav-link" href="contacto.php">Contacto</a>
      </nav>
    </footer>
  </body>
</html>
