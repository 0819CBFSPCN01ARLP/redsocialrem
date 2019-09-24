<?php
  require_once("php/validaciones.php");
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <title>Contacto</title>
  </head>
  <body>

      <?php require_once("header.php") ?>

    <h1 class="text-center">CONTACTO</h1>

    <?php
      if ($_POST) {
        $errores = [];
        $errores[] = correo();
        $errores[] = text();
        $text = trim($_POST["text"]);
        $correo = trim($_POST["correo"]);

        foreach ($errores as $error) {
          echo $error;
        }
        if ($errores == ["", ""]) {
          header("Location: home.php");
          exit;
        }
      }
     ?>
    <form class="" action="contacto.php" method="post">
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputEmail">Correo electrónico</label>
        <input name="correo" type="email" class="form-control col-5" id="inputEmail" value="<?=$correo; ?>" required>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputMensaje">Mensaje</label>
        <textarea name="text" class="form-control col-5" id="inputMensaje" rows="3" required></textarea>
      </div>
      <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>

    <footer class="jumbotron-fluid bg-primary">
      <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
    </footer>
  </body>
</html>
