<?php
  include_once("php/incluir.php");
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "amigos"]); ?>
  <body>
    <?php incluir_template("header"); ?>
    <h1>AMIGOS</h1>
    <br>
    <!-- Todos los amigos -->
    <section class="row w-100">
      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            <img src="img/gato.png" class="card-img" alt="...">
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">Nombre Apellido</h4>
              <h6 class="card-text">Cumpleaños: DD/MM</h6>
              <p class="card-text"><small class="text-muted">Última vez conectado</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de amigos -->
    <br>
    <?php incluir_template("footer"); ?>
  </body>
</html>
