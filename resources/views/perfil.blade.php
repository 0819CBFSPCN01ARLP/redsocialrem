  @extends('app')

  @section("title")
    Perfil
  @endsection

  @section("css")
    "/css/perfil.css"
  @endsection

  @section('content')
<<<<<<< Updated upstream
  
=======
    <!-- foto perfil -->
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
                @foreach ($images as $image)
                  @if ($image->position == "fotoPerfil")
                    <img src="/storage/{{$image->path}}" alt="">
                  @endif
                @endforeach
                {{-- @empty
                <img id="mi-foto" class="col-md-4 col-sm-9" src="/fotoPerfil.jpg"> --}}
                <p class = "ml-4"><b>{{$user->name}} {{$user->surname}}</b></p>
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
      <div class="container">
        <section class = "col-lg-12 col-sm-12 mb-4">
          @forelse ($posts as $post)
            <div class="d-flex align-items-end flex-column bd-highlight mb-3 card w-100" style="height: 200px;">
              <div class="card-body w-100">
                @foreach ($images as $image)
                  @if ($post->id_image == $image->id)
                    <img src="/storage/{{$image->path}}" alt="">
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
              </div>
            </div>
          @empty
            <p>Aún no hay publicaciones.</p>
            <br><br>
          @endforelse
        </section>
      </div>

    </main>
>>>>>>> Stashed changes
  @endsection
