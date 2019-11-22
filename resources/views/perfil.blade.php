  @extends('app')

  @section('content')
    <!-- foto perfil -->
    <div class="container">
      <section class ="main row">
        <article class="col-lg-4 col-md-12 col-sm-12">
          <div class="card w-100 mt-5 ml-auto">
            <div class="card-body w-100">

                  <img id="mi-foto" class="col-lg-12 col-md-4 col-sm-9" <img src="">

                  <img id="mi-foto" class="col-md-4 col-sm-9" <img src="php/subidas/fotoPerfil.jpg">

              <p class = "ml-4"><b></b></p>
              <form class="col-lg-12 col-md-6" action="php/subirFotos.php" method="post" enctype="multipart/form-data">
                <input class = "form-control-file" type="file" name="archivo" id="archivo"><br>
                <input class = "btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
              </form>
            </div>
          </div>
        </article>

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

        <!-- Publicaciones -->
        <div class="container">
          <section class = "col-lg-12 col-sm-12 mb-4">
              <div class="d-flex align-items-end flex-column bd-highlight mb-3 card w-100" style="height: 200px;">
                <div class="card-body w-100">
                    <img class="float-left" src="php" alt="">
                  <form class="" action="php/editar.php" method="post">
                    <input type="hidden" name="postId" value="">
                    <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="editar">Editar</button>
                    <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="eliminar">Eliminar</button>
                  </form>
                </div>
              </div>
          </div>
        </section>
  @endsection
