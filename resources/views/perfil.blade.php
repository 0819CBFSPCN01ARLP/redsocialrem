@extends('app')

@section("title")
  Perfil
@endsection

@section("css","/css/perfil.css")

@section('content')
  <main>

    {{-- Errores --}}
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Banner y foto de perfil --}}
    <div id=banner class="">
      <i id=camarita class="fas fa-camera-retro"></i>
      {{-- no se puede usar modal-dialog porque rompe el examinar para subir una nueva foto de perfil --}}
      <section id=perfil class ="text-center">
        <article class="col-12 col-md-12 col-sm-12">
          <div class=" card-body w-100">
            @foreach ($images as $image)
              @if ($image->position == "fotoPerfil")
                <img id="mi-foto" style="margin-left:25%;width:20%" class="col-5 col-md-6 col-sm-6" src="/storage/{{$image->path}}">
              @endif
            @endforeach
            <p class = "ml-4"><b>{{$user->name}} {{$user->surname}}</b></p>
            <form class="col-lg-12 col-md-4" action="profilepicture" method="post" enctype="multipart/form-data">
              @csrf
              <input class = "form-control-file" type="file" name="profilePicture" id="archivo"><br>
              <input class = "btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
            </form>
          </div>
        </article>
      </section>
    </div>
    <br><br>

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
      <section class = "col-lg-12 col-sm-12">
        @forelse ($posts as $post)
        <div class="card w-100 ">
          <div style="" class="col-lg-12 card-body w-100 ">
            @foreach ($images as $image)
              @if ($post->id_image == $image->id)
                <img src="/storage/{{$image->path}}" alt="">
              @endif
            @endforeach
            <br>
            <p>{{$post->text}}</p>
            <br>
            <form action="post/{{$post->id}}/editar" method="get">
              @csrf
              <button type="submit" class="btn mt-2 ml-3" style="background-color:#464655; color:white">Editar</button>
            </form>
            <form action="post/{{$post->id}}/eliminar" method="post">
              @csrf
              <button type="submit" name="eliminar" class="btn mt-2 ml-3" style="background-color:#464655; color:white">Eliminar</button>
            </form>
            <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="comentar">Comentar</button>

            <!-- comentarios -->
            <div class="card w-100 ">
              <div style="" class="card-body w-100 col-6ds ">
                <img style="border-radius:50%" class="float-left " src="PERFIL-COMENTARIO.jpg" alt="">
                <br>
                <h4>Nombre usuario</h4>
                <p>Esto es un comentario</p>
                <button class="btn mt-2 ml-3" style="background-color:#464655; color:white ; margin-bottom:35px" type="submit" name="editar">responder</button>

                <!-- respuestas -->
                {{-- <div class="col-10 col-md-10 col-sm-10 container">
                  <img style="border-radius:50%" class="float-left" src="gato.png" alt="">
                  <h4>Nombre usuario</h4>
                  <p>Esto es una respuesta a un comentario</p>
                  <button class="btn mt-2 ml-3" style="background-color:#464655; color:white ; margin-bottom:35px" type="submit" name="editar">responder</button>
                </div>
                <br> --}}

              </div>
            </div>
          </div>
        </div>
        <br>
        @empty
          <p>Aún no hay publicaciones.</p>
          <br><br>
        @endforelse
      </section>
    </div>

  </main>
@endsection
