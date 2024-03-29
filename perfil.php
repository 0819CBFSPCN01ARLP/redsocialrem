<?php
  require_once("php/incluir.php");
  require_once("db/pdo.php");
  session_start();

  $email = $_SESSION["correo"];

  // CONSIGUE ID DE USUARIO
  $q = $db->prepare("SELECT id FROM users WHERE email LIKE '$email'");
  $q->execute();
  $user = $q->fetch();
  $userId = intval($user["id"]);

  // TRAE LOS POSTS DE ESE USUARIO
  $q = $db->prepare("SELECT id, text, id_image FROM posts WHERE id_user = $userId");
  $q->execute();
  $posts = $q->fetchAll(PDO::FETCH_ASSOC);

  // TRAE LAS IMAGENES DE LOS POSTS
  $q = $db->prepare("SELECT id, path FROM images WHERE id_user = $userId AND position = 'post'");
  $q->execute();
  $images = $q->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "perfil"]); ?>

  <!-- encabezado -->
  <?php incluir_template("header"); ?>

  <body>
    <!-- foto perfil -->
    <div class="container">
      <section class ="main row">
        <article class="col-lg-4 col-md-12 col-sm-12">
          <div class="card w-100 mt-5 ml-auto">
            <div class="card-body w-100">
              <?php if (isset($_SESSION["correo"])): ?>
                <?php if (file_exists("php/subidas/perfil" . $_SESSION["correo"] . ".jpg")): ?>
                  <img id="mi-foto" class="col-lg-12 col-md-4 col-sm-9" <img src="<?php echo "php/subidas/perfil" . $_SESSION["correo"] . ".jpg"; ?>">
                <?php else: ?>
                  <img id="mi-foto" class="col-md-4 col-sm-9" <img src="php/subidas/fotoPerfil.jpg">
                <?php endif; ?>
              <?php endif; ?>
              <p class = "ml-4"><b><?=$_SESSION["correo"]; ?></b></p>
              <form class="col-lg-12 col-md-6" action="php/subirFotos.php" method="post" enctype="multipart/form-data">
                <input class = "form-control-file" type="file" name="archivo" id="archivo"><br>
                <input class = "btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
              </form>
            </div>
          </div>
        </article>

        <!-- carrusel -->
        <article class="col-lg-8 d-none d-lg-block">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div style="height:400px" class="carousel-inner">
              <div class="carousel-item active w-100 h-100">
                <img src="http://apliense.xtec.cat/prestatgeria/centres/e3010335_1465/d43d90cb7e09.jpg " class="d-block mx-auto w-100 h-100" alt="...">
              </div>
              <div class="carousel-item w-100 h-100">
                <img src="https://www.todopaisajes.com/1024x768/paisaje-de-flores.jpg " class="d-block mx-auto w-100 h-100" alt="...">
              </div>
              <div class="carousel-item w-100 h-100">
                <img src="https://www.todopaisajes.com/1024x768/puente-en-la-selva.jpg " class="d-block mx-auto w-100 h-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </article>
      </section>
    </div>
    <br>
    <!-- Subida de publicaciones -->
    <div class="container">
      <section class = "col-lg-12 col-sm-12">
        <div class="card w-100">
          <div class="card-body w-100">
            <form class="col-lg-12 col-md-6" action="php/post.php" method="post" enctype="multipart/form-data">
              <input name="photo" type="file" class="file" multiple
                data-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
              <textarea class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1" placeholder="¿Qué estás pensando?"></textarea>
              <br>
              <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Publicar</button>
            </form>
          </div>
        </div>
      </section>
    </div>
    <br><br>

    <!-- Publicaciones -->
    <div class="container">
      <section class = "col-lg-12 col-sm-12 mb-4">
        <?php foreach ($posts as $post): ?>
          <?php
            foreach ($images as $image) {
              if ($post["id_image"] === $image["id"]) {
                $imagen = $image["path"];
              }
            }

          ?>
          <div class="d-flex align-items-end flex-column bd-highlight mb-3 card w-100" style="height: 200px;">
            <div class="card-body w-100">
              <?php if ($imagen != null): ?>
                <img class="float-left" src="php/<?=$imagen; ?>" alt="">
              <?php endif; ?>
              <p><?=$post["text"]; ?></p>
              <form class="" action="php/editar.php" method="post">
                <input type="hidden" name="postId" value="<?=$post["id"]; ?>">
                <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="editar">Editar</button>
                <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="eliminar">Eliminar</button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </body>

  <!-- Pie de pagina -->
  <?php incluir_template("footer") ?>
</html>
