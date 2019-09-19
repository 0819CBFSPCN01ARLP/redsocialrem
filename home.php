<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <meta charset="utf-8">
    <title>Home</title>
  </head>

<!-- encabezado -->
  <header class="jumbotron-fluid bg-primary">
    <nav>
      <a class="nav-link" href="perfil.php"><ion-icon name="contact"></ion-icon>Mi Perfil</a>
      <a class="nav-link" href="amigos.php"><ion-icon name="contacts"></ion-icon>Amigos</a>
      <a class="nav-link" href="home.php"><ion-icon name="home"></ion-icon>Home</a>
      <a class="nav-link" href="buscar.php"><ion-icon name="search"></ion-icon>Buscar</a>
    </nav>
    <img class="logo" src="img/logo.png" alt="logo">
  </header>

<!-- Cuerpo -->
  <body>
      <div class="abuelo mt-5 row">
        <aside class="col-4">
          <div class="card">
            <div class="card-header">
              Amigos
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><img src="img/gato.png" alt="amigo"> Amigo 1</li>
              <li class="list-group-item"><img src="img/gato.png" alt="amigo"> Amigo 2</li>
              <li class="list-group-item"><img src="img/gato.png" alt="amigo"> Amigo 3</li>
            </ul>
          </div>
        </aside>
        <!-- <section class="col-1">

        </section> -->

        <section class="padre col-7">
          <section class="">
            <div class="card w-100">
              <div class="card-body w-100">
                <img src="img/gato.png" alt="foto de perfil">
                <textarea class="w-100" name="name" rows="8">¿Qué estás pensando?</textarea>
                <br>
                <a href="#" class="btn btn-primary">Publicar</a>
              </div>
            </div>
            <br>
          </section>
          <section class="">
            <div class="card w-100 bg-light mb-3">
              <div class="card-header">Usuario</div>
              <div class="card-body">
                <h5 class="card-title">Mi publicación</h5>
                <p class="card-text">Esto es una publicación</p>
              </div>
            </div>
          </section>
          <section class="">
            <div class="card w-100 bg-light mb-3">
              <div class="card-header">Usuario</div>
              <div class="card-body">
                <h5 class="card-title">Mi publicación</h5>
                <p class="card-text">Esto es una publicación</p>
              </div>
            </div>
          </section>
          <section class="">
            <div class="card w-100 bg-light mb-3">
              <div class="card-header">Usuario</div>
              <div class="card-body">
                <h5 class="card-title">Mi publicación</h5>
                <p class="card-text">Esto es una publicación</p>
              </div>
            </div>
          </section>
          <section class="">
            <div class="card w-100 bg-light mb-3">
              <div class="card-header">Usuario</div>
              <div class="card-body">
                <h5 class="card-title">Mi publicación</h5>
                <p class="card-text">Esto es una publicación</p>
              </div>
            </div>
          </section>
        </section>
      </div>
  </body>
  <br>
  <footer class="jumbotron-fluid bg-primary">
    <nav class="nav justify-content-center my-3">
      <a class="nav-link" href="faq.php"><ion-icon name="help"></ion-icon>Preguntas Frecuentes</a>
      <a class="nav-link" href="contacto.php"><ion-icon name="mail"></ion-icon>Contacto</a>
    </nav>
  </footer>
</html>
