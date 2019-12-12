@extends('app')

@section("title")
  Perfil
@endsection

@section("css","/css/perfil.css")

@section('content')
  <main>

    {{-- Banner y foto de perfil --}}
    <div class="">
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
            <h3>{{$user->name}} {{$user->surname}}</h3>
            <form class="col-lg-12 col-md-4" action="profilepicture" method="post" enctype="multipart/form-data">
              @csrf
              <input class = "form-control-file" type="file" name="profilePicture" id="archivo" required><br>
              <input class = "btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
            </form>
          </div>
        </article>
      </section>
    </div>
    <br><br>

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
      <section class = "col-lg-10 col-sm-10">
        @forelse ($posts as $post)
        <div class="card w-100 ">
          <div class="card-body w-100 ">
            <h3>{{$post->user->name}} {{$post->user->surname}}</h3>
            @foreach ($images as $image)
              @if ($post->id_image == $image->id)
                <img src="/storage/{{$image->path}}" width="500" alt="">
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
            <form class="" action="post/{{$post->id}}/comentar" method="post">
              @csrf
              <input type="hidden" name="page" value="miperfil">
              <input type="hidden" name="postId" value="{{$post->id}}">
              <input type="text" name="comment" class="form-control mt-2" required>
              <button class="btn mt-2 ml-3" style="background-color:#464655; color:white" type="submit" name="comentar">Comentar</button>
            </form>

            <!-- comentarios -->
            @forelse ($post->comments as $comment)
              <div class="card w-50 ">
                <div style="" class="card-body w-100">
                  <img width="100" class="float-left mr-4" src="/storage/{{$comment->user->fotoPerfil()}}" alt="">
                  <br>
                  <h4><a href="/perfil/{{$comment->user->id}}">{{$comment->user->name}} {{$comment->user->surname}}</a></h4>
                  <p>{{$comment->text}}</p>
                  @if ($comment->user->id == $user->id)
                    <form class="" action="/comment/{{$comment->id}}/eliminar" method="get">
                      <input type="hidden" name="page" value="miperfil">
                      <input type="hidden" name="id" value="{{$comment->id}}">
                      <button class="btn" type="submit" name="button" style="background-color:#464655; color:white">Eliminar</button>
                    </form>
                  @endif
                </div>
              </div>
            @empty

            @endforelse

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
