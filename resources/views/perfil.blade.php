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
    <main>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="container">
        <section class ="col-4">
          {{-- Este articulo no va porque rompe el input --}}
          {{-- <article class="col-8 col-md-12 col-sm-8"> --}}
            <div class="card w-100 mt-5 ml-auto">
              <div class="card-body w-100">
                @forelse ($images as $image)
                  @if ($image->position == "fotoPerfil")
                    <img src="storage/{{$image->path}}" alt="">
                  @endif
                @empty
                  <img id="mi-foto" class="col-md-4 col-sm-9" src="fotoPerfil.jpg">
                @endforelse
                <p class = "ml-4"><b>Nombre Apellido</b></p>
                <form class="col-lg-12 col-md-6" action="profilepicture" method="post" enctype="multipart/form-data">
                  @csrf
                  <input class ="form-control-file" type="file" name="profilePicture" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto..."><br>
                  <button class ="btn" style="background-color:#464655; color:white" type="submit">Subir foto</button>
                </form>
              </div>
            </div>
          {{-- </article> --}}
        </section>
      </div><br><br>


      <!-- Subida de publicaciones -->
      <div class="container">
        <section class = "col-lg-12 col-sm-12">
          <div class="card w-100">
            <div class="card-body w-100">
              <form class="col-lg-12 col-md-6" action="newpost" method="post" enctype="multipart/form-data">
                @csrf
                <input name="image" type="file" class="file" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
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
      {{-- <!-- <div class="container">
        <section class = "col-lg-12 col-sm-12 mb-4">
          @forelse ($posts as $post)
            <div class="d-flex align-items-end flex-column bd-highlight mb-3 card w-100" style="height: 200px;">
              <div class="card-body w-100">
                @foreach ($images as $image)
                  @if ($post->id_image == $image->id)
                    <img src="storage/{{$image->path}}" alt="">
                  @endif
                @endforeach
                <p>{{$post->text}}</p>
                <form action="post/{{$post->id}}/editar" method="get">
                  @csrf
                  <button type="submit" class="btn mt-2 ml-3" style="background-color:#464655">Editar</button>
                </form>
                <form action="post/{{$post->id}}/eliminar" method="post">
                  @csrf
                  <button type="submit" name="eliminar" class="btn mt-2 ml-3" style="background-color:#464655">Eliminar</button>
                </form>

                @empty
                  <p>Aún no hay publicaciones.</p>
              </div>
            </div>
          </section>
        </div>
        <br> --> --}}

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
