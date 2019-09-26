<?php
  require_once("php/validaciones.php");
  require_once("php/incluir.php");
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "Contacto"]); ?>
  <body>

      <?php incluir_template("header"); ?>

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
    </form><br>

    <?php incluir_template("footer"); ?>
  </body>
</html>
