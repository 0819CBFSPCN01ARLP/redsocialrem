<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Contacto</title>
  </head>
  <body>
    <header class="jumbotron-fluid bg-primary">
      <nav>
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="perfil.php">Perfil</a>
        <a class="nav-link" href="amigos.php">Amigos</a>
      </nav>
    </header>

    <h1 class="text-center">CONTACTO</h1>
    <form class="" action="home.php" method="post">
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputEmail">Correo electrónico</label>
        <input type="email" class="form-control col-5" id="inputEmail" required>
      </div>
      <div class="form-group row justify-content-center">
        <label class="col-5 col-md-3 col-lg-2 col-form-label" for="inputMensaje">Mensaje</label>
        <textarea class="form-control col-5" id="inputMensaje" rows="3" required></textarea>
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
