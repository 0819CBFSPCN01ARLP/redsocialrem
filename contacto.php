<?php
  require_once("php/validaciones.php");
  require_once("php/incluir.php");
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "Contacto"]); ?>
  <body>
    <?php incluir_template("header"); ?>

    <h1 class="text-center"><em>CONTACTO</em></h1>

    <?php
      if ($_POST) {
        $errores = [];
        $errores = validarCorreo($errores);
        $errores = validarText($errores);
        $text = trim($_POST["text"]);
        $correo = trim($_POST["correo"]);

        foreach ($errores as $error) {
          echo $error;
        }
        if (count($errores) === 0) {
          header("Location: home.php");
          exit;
        }
      }
     ?>
    <form class="" action="contacto.php" method="post">
      <div class="form-group row justify-content-center">
        <input name="correo" type="email" class="form-control col-5" id="inputEmail" value="<?=$correo; ?>" required placeholder="EMAIL">
      </div>
      <div class="form-group row justify-content-center">
        <textarea name="text" class="form-control col-5" id="inputMensaje" rows="3" required>MENSAJE</textarea>
      </div>
      <div class="row justify-content-center">
        <button style="background-color:#464655;" type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form><br>

    <?php incluir_template("footer"); ?>
  </body>
</html>
