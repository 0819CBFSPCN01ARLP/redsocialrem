<?php
  require_once("php/incluir.php");
 ?>

 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "perfil"]); ?>

<!-- encabezado -->
<?php incluir_template("header"); ?>
<!-- foto perfil -->
<body>

  <div class="container">
    <section class ="main row">
        <article id="foto-perfil" class="col-lg-4 col-md-12 col-sm-12">
              <img id="mi-foto" class="col-md-11 col-sm-9" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </article>
<!-- carrusel -->
<article id="CARRUSEL" class="col-lg-8 d-none d-lg-block">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 <div style="height:400px" class="carousel-inner">
   <div class="carousel-item active w-100 h-100">
     <img src="http://apliense.xtec.cat/prestatgeria/centres/e3010335_1465/d43d90cb7e09.jpg
" class="d-block mx-auto w-100 h-100" alt="...">
   </div>
   <div class="carousel-item w-100 h-100">
     <img src="https://www.todopaisajes.com/1024x768/paisaje-de-flores.jpg
" class="d-block mx-auto w-100 h-100" alt="...">
   </div>
   <div class="carousel-item w-100 h-100">
     <img src="https://www.todopaisajes.com/1024x768/puente-en-la-selva.jpg
" class="d-block mx-auto w-100 h-100" alt="...">
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
        <div id="fotos-amigos" class="col-lg-3 col-md-6 d-none d-md-block">
          <img id="amigo" class = "col-lg-12 col-md-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-lg-3 col-md-6 d-none d-md-block">
              <img id="amigo" class = "col-lg-12 col-md-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-lg-3 d-none d-lg-block">
            <img id="amigo" class = "col-lg-12 col-md-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
        <div id="fotos-amigos" class="col-lg-3 d-none d-lg-block">
          <img id="amigo" class="col-lg-12 col-md-12" src="https://www.tuexperto.com/wp-content/uploads/2015/07/perfil_01.jpg" alt="">
        </div>
      </section>
    </div>
    <br>
<!-- publicaciones -->
<div class="container">
  <section class="col-12">
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
</div>
</body>
<!-- Pie de pagina -->
  <?php incluir_template("footer"); ?>
</html>
