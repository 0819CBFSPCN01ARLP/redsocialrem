<?php
  require_once("php/incluir.php");
 ?>

 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "home"]); ?>

<!-- encabezado -->
  <?php incluir_template("header"); ?>

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
  <?php incluir_template("footer"); ?>
</html>
