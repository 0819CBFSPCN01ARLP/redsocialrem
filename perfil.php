<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>Perfil</title>
  </head>

<!-- encabezado -->
<?php include("header.php"); ?>
<!-- foto perfil -->
<body>

  <div class="container">
    <section class ="main row">
        <article id="foto-perfil" class="col-3 col-md-3 col-sm-3">
            <img id="mi-foto" class= "col-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </article>
<!-- carrusel -->
        <article id="CARRUSEL" class="col-9 col-md-9 col-sm-9">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://apliense.xtec.cat/prestatgeria/centres/e3010335_1465/d43d90cb7e09.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.todopaisajes.com/1024x768/paisaje-de-flores.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.todopaisajes.com/1024x768/puente-en-la-selva.jpg" class="d-block w-100" alt="...">
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
<!-- amigos -->
    <div class="container">
      <section id="amigos" class = "main row">
        <div id="fotos-amigos" class="col-3 col-lg-3 col-md-3 col-sm-3">
          <img id="amigo" class = "col-12 col-lg-12 col-md-12 col-sm-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-3 col-lg-3 col-md-3 col-sm-3">
              <img id="amigo" class = "col-12 col-lg-12 col-md-12 col-sm-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-3 col-lg-3 col-md-3 col-sm-3">
            <img id="amigo" class = "col-12 col-lg-12 col-md-12 col-sm-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-3 col-lg-3 col-md-3 col-sm-3">
          <img id="amigo" class="col-12 col-lg-12 col-md-12 col-sm-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
      </section>
    </div>
    <br>
<!-- publicaciones -->
  <div class="container">
      <section id="publicaciones" class = "row">
        <article class="col-md-12">
          <img id="mi-foto-publicaciones" class= "col-3" src="https://cdn.pixabay.com/photo/2016/09/07/16/25/husky-1651984_960_720.jpg" alt="">
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </article>
      </section>
  </div>
<br>
  <div class="container">
      <section id="publicaciones" class = "main row">
        <article class="col-md-12">
          <img id="mi-foto-publicaciones" class= "col-3" src="https://cdn.pixabay.com/photo/2016/09/07/16/25/husky-1651984_960_720.jpg" alt="">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </article>
      </section>
  </div>
</body>

<!-- Pie de pagina -->
  <footer class="jumbotron-fluid bg-primary">
    <nav class = "nav justify-content-center my-3">
      <a class="nav-link" href="faq.php"><ion-icon name="help"></ion-icon>Preguntas Frecuentes</a>
      <a class = "nav-link" href="contacto.php"><ion-icon name="mail"></ion-icon>Contacto</a>
    </nav>
  </footer>
</html>
