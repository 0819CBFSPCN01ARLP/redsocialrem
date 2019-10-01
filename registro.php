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

  <!-- encabezado -->
  <header style="background-color:#6f42c1" class="jumbotron-fluid">
      <a style="color:white;" id="registrate" href="registro.php">Registrate</a>
  </header>

  <body>

    <h1 class="text-center">REGISTRO</h1>

    <?php
      if ($_POST) {
        $_SESSION["correo"] = $_POST["correo"];

        $errores = [];
        $errores[] = nombre();
        $errores[] = apellido();
        $errores[] = correo();
        $errores[] = pass();
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $correo = trim($_POST["correo"]);


        foreach ($errores as $error) {
          echo $error;
        }
        if ($errores == ["", "", "", ""]) {
          nuevoUsuario();
          $_SESSION["correo"] = $_POST["correo"];
          header("Location: perfil.php");
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
  </body>

  <!-- Pie de pagina -->
  <footer  style="background-color:#6f42c1" class="jumbotron-fluid">
    <nav class="nav justify-content-center">
      <a style="color:white;" class=" nav-link" href="faq.php">Preguntas Frecuentes</a>
      <a style="color:white;" class="nav-link" href="contacto.php">Contacto</a>
    </nav>
  </footer>
</html>
