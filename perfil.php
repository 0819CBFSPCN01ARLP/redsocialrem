<?php
  require_once("php/incluir.php");
  session_start();
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
    <!-- publicaciones -->
    <div class="container">
      <section class = "col-lg-12 col-sm-12">
        <div class="card w-100">
          <div class="card-body w-100">
            <form class="col-lg-12 col-md-6" action="php/subirFotos.php" method="post" enctype="multipart/form-data">
              <input id="input-b3" name="input-b3[]" type="file" class="file" multiple
                data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
              <textarea class="col-sm-6 col-md-8 col-lg-9 mt-2" name="name" rows="1" >¿Qué estás pensando? </textarea>
            </form>
            <br>
            <a href="#" style="background-color:#464655; color:white" class="btn mt-2 ml-3">Publicar</a>
          </div>
        </div>
      </section>
    </div>
    <br><br>
  </body>
  <!-- Pie de pagina -->
  <?php incluir_template("footer") ?>
</html>
