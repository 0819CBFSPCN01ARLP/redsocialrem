<?php
require_once 'php/incluir.php';
require_once 'php/usuarios.php';
var_dump($_FILES);


if ($_FILES) {
  var_dump($_FILES);
  fotoDePerfil();
}
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "configuracion"]); ?>
  <body>
    <?php incluir_template("header"); ?>
    <form action="configuracion.php" post="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="foto">Foto de perfil</label>
        <input type="file" class="form-control-file" id="fotoPerfil" name="foto"><br>
        <!-- <button class="btn btn-dark" type="submit" name="button">Guardar</button> -->
        <input type="submit" name="submit" value="Guardar">
      </div>
    </form>
    <?php incluir_template("footer"); ?>
  </body>
</html>
