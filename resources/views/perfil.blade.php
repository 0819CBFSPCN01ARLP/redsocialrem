  @extends('app')

  @section("title")
    Perfil
  @endsection

  @section("css")
    "/css/perfil.css"
  @endsection

  @section('content')
    <!-- foto perfil -->

    <div id=banner class="">
    <i id=camarita class="fas fa-camera-retro"></i>
      <section id=perfil class ="modal-dialog text-center">
        <article class="col-12 col-md-12 col-sm-12">
            <div class=" card-body w-100">
                  <img id="mi-foto" style="margin-left:25%" class="col-5 col-md-6 col-sm-6" <img src="gato.png">
                  <p class = "ml-4"><b></b></p>
                  <form class="col-lg-12 col-md-4" action="php/subirFotos.php" method="post" enctype="multipart/form-data">
                <input class = "form-control-file" type="file" name="archivo" id="archivo"><br>
                <input class = "btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
                </form>
            </div>
          </div>
        </article>
      </section>
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
        <br>

        <!-- Publicaciones -->

        <div class="container">
          <section class = "col-lg-12 col-sm-12">
            <div class="card w-100 ">
              <div style="" class="col-lg-12 card-body w-100 ">
                  <img class="float-left" src="gato.png" alt="">
                  <br>
                  <textarea style="margin-top:30px" class="col-sm-6 col-md-8 col-lg-9" mt-2 row="50" name="text" rows="1">Esta es una publicacion</textarea>
                  <br>
                  <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="editar">Editar</button>
                  <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="eliminar">Eliminar</button>
                  <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="editar">comentar</button>

        <!-- comentarios -->
            <div class="card w-100 ">
              <div style="" class="card-body w-100 col-6ds ">
                <img style="border-radius:50%" class="float-left " src="PERFIL-COMENTARIO.jpg" alt="">
                  <br>
                <textarea style="margin-top:30px" class="col-sm-6 col-md-8 col-lg-9" mt-2 row="50" name="text" rows="1">"NOMBRE DEL USUARIO" = Esto es un comentario...</textarea><br>
                <button class="btn mt-2 ml-3" style="background-color:#464655; color:white ; margin-bottom:35px" type="submit" name="editar">responder</button>

          <!-- respuestas -->
                <div class="col-10 col-md-10 col-sm-10 container">
                  <img style="border-radius:50%" class="float-left" src="gato.png" alt="">
                  <textarea style="margin-top:55px" class="col-sm-6 col-md-8 col-lg-9" mt-2 row="50" name="text" rows="1">" NOMBRE DEL USUARIO" = Esta es una repuesta...</textarea>
                    <button class="btn mt-2 ml-3" style="background-color:#464655; color:white ; margin-bottom:35px" type="submit" name="editar">responder</button>
                </div>

                  <br>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection
