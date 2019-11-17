<?php

  require_once("incluir.php");
  require_once("../db/pdo.php");
  session_start();

  if (isset($_POST["editar"])) {

    // TRAE EL POST A EDITAR
    $id = $_POST["postId"];
    $q = $db->prepare("SELECT * FROM posts WHERE id = $id");
    $q->execute();
    $post = $q->fetch();
    $_SESSION["postId"] = $id;

    // TRAE LA FOTO DEL POST
    $imageId = $post["id_image"];
    $q = $db->prepare("SELECT * FROM images WHERE id = $imageId AND position = 'post'");
    $q->execute();
    $image = $q->fetch();
    $_SESSION["path"] = $image["path"];
    $_SESSION["imageId"] = $image["id"];

  }
  // GUARDA LOS NUEVOS DATOS
  if (isset($_POST["update"])) {
    if (isset($_POST["text"])) {
      $text = $_POST["text"];
      $id = $_SESSION["postId"];
      $q = $db->prepare("UPDATE posts SET text=:text WHERE id = $id");
      $q->bindValue(":text", $text);
      $q->execute();
    }
    if ($_FILES) {
      $ext = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["photo"]["tmp_name"], $_SESSION["path"].".".$ext);
      $path = $_SESSION["path"].".".$ext;
      $imageId = $_SESSION["imageId"];
      $que = $db->prepare("UPDATE images SET path='$path' WHERE id = $imageId");
      $que->bindValue(":path", $path);
      $que->execute();
    }
    header("Location: ../perfil.php");
    exit;
  }

  if (isset($_POST["eliminar"])) {
    // ELIMINA EL POST ELEGIDO
    $id = $_POST["postId"];
    $q = $db->prepare("SELECT * FROM posts WHERE id = $id");
    $q->execute();
    $post = $q->fetch();

    $postId = $post["id"];
    $q = $db->prepare("DELETE FROM posts WHERE id = $postId");
    $q->execute();

    $imageId = $post["id_image"];
    $q = $db->prepare("DELETE FROM images WHERE id = $imageId");
    $q->execute();

    header("Location: ../perfil.php");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "editar"]); ?>
  <body>
    <div class="container">
      <section class = "col-lg-12 col-sm-12">
        <div class="card w-100 mt-5">
          <div class="card-body w-100">
            <form class="col-lg-12 col-md-6" action="editar.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="update" value="1">
              <input name="photo" type="file" class="file" multiple
                data-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
              <textarea class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1"><?=$post["text"]; ?></textarea>
              <img src="<?=$image["path"]; ?>" width="180" class="mt-1" alt="">
              <br>
              <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Publicar</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
