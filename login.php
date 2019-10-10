<?php
  require_once("php/validaciones.php");
  require_once("php/usuarios.php");
  if (isset($_COOKIE["correo"])) {
    $correo = $_COOKIE["correo"];
  }

  // SE FIJA SI EL USUARIO TIENE COOKIE DE RECORDAR
  if (isset($_COOKIE["recordarme"])) {
    $recordarme = "checked";
  }
  else {
    $recordarme = "";
  }
?>

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
  <header style="background-color:#6f42c1" class="jumbotron-fluid">
    <a style="color:white;" id="registrate" href="registro.php">Registrate</a>
  </header>

  <!-- Formulario de ingreso -->
  <body>
    <h1 class = "text-center"><em>INICIAR SESIÓN</em></h1>
    <div class="container">
      <?php
        if ($_POST) {
          if (isset($_POST["recordarme"])) {
            setcookie("correo", $_POST["correo"]);
            setcookie("recordarme", $recordarme = "checked");
          }
          else {
            setcookie("email", "", -1);
            setcookie("recordarme", "", -1);
          }

          $errores = [];
          $errores = validarCorreo($errores);
          $errores = validarPass($errores);
          $correo = trim($_POST["correo"]);

          foreach ($errores as $error) {
            echo $error;
          }
          if (count($errores) === 0) {
            $validar = login();
            if ($validar === true) {
              $_SESSION["correo"] = $_POST["correo"];
              header("Location: home.php");
              exit;
            }
            else {
              echo $validar;
            }
          }
        }
      ?>
      <div class="modal-dialog text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <img class="col-sm-8 col-md-8 col-lg-10" src="img/logo.png" alt="">
        </div>
      </div>
      <form class="" action="login.php" method="post">
        <div class="form-group row justify-content-center">
          <input class="col-6" id="Email" type="Email" name="correo" value="<?=$correo; ?>" required placeholder="EMAIL">
        </div>
        <div class="form-group mb-2 row justify-content-center">
          <input class ="col-6"id="Contraseña" type="password" name="pass" value="" required placeholder="contraseña">
        </div>
        <div class="form-check row mb-4 justify-content-center">
          <label class="col-12 text-center form-check-label" for="recordarme">
            <input class="form-check-input" name="recordarme" type="checkbox" id="recordarme" <?=$recordarme; ?>>
            Recordarme
          </label>
        </div>
        <div class="row justify-content-center">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </body>

  <!-- Pie de pagina -->
  <footer  style="background-color:#6f42c1" class="jumbotron-fluid">
    <nav class="nav justify-content-center">
      <a style="color:white;" class=" nav-link" href="faq.php">Preguntas Frecuentes</a>
      <a style="color:white;" class="nav-link" href="contacto.php">Contacto</a>
    </nav>
  </footer>
</html>
