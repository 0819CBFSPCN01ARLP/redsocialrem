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

    <div class="container-fluid">
      <div class="row">
        {{-- Foto de perfil --}}
        <section id=perfil class ="text-center col-4 m-auto">
          <article class="">
            <div class="w-100 col">
              @foreach ($images as $image)
                @if ($image->position == "fotoPerfil")
                  <img class="float-left col-8 mb-4" src="/storage/{{$image->path}}">
                @endif
              @endforeach
              <div class="col-12">
                <h3>{{$user->name}} {{$user->surname}}</h3>
              </div>

              {{-- Subida de foto de perfil --}}
              <form id="profileForm" class="col-lg-12 col-md-4" action="profilepicture" method="post" enctype="multipart/form-data">
                @csrf
                <input id="profileFile" class = "form-control-file" type="file" name="profilePicture" id="archivo"><br>
                <input class ="btn" style="background-color:#464655; color:white" type="submit" value="Subir foto perfil">
              </form>
            </div>
          </article>
        </section>
        <br><br>

        <!-- Subida de publicaciones -->
        <section class = "col-6 m-auto">
          <div class="card w-100">
            <div class="card-body w-100">
              <form id="postForm" class="col-lg-12 col-md-6" action="newpost" method="post" enctype="multipart/form-data">
                @csrf
                <input id="postImage" name="image" type="file" class="file" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
                <textarea id="postText" class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1" placeholder="¿Qué estás pensando?"></textarea>
                <br>
                <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Publicar</button>
              </form>
            </div>
          </div>
        </section>
        <br><br>
      </div>
    </div>


    <!-- Publicaciones -->
    <div class="container mt-5">
      <section class = "col-8 m-auto">
        @forelse ($posts as $post)
        <div class="card w-100 ">
          <div class="card-body w-100 ">
            <div class="row justify-content-between">
              <h3 class="ml-3">{{$post->user->name}} {{$post->user->surname}}</h3>
              <div>

              <form class="float-right" action="post/{{$post->id}}/editar" method="get">
                @csrf
                <button type="submit" class="btn mr-3" style="background-color:#464655; color:white"><i class="fas fa-edit"></i></button>
              </form>
              <form class="float-right deletePost" action="post/{{$post->id}}/eliminar" method="post">
                @csrf
                <button type="submit" name="eliminar" class="btn mr-3 mb-2" style="background-color:#464655; color:white"><i class="fas fa-trash-alt"></i></button>
              </form>
            </div>
            </div>
            @foreach ($images as $image)
              @if ($post->id_image == $image->id)
                <img src="/storage/{{$image->path}}" class="imagePost" alt="">
              @endif
            @endforeach
            <br>
            <p class="mt-3 ml-3 mb-0">{{$post->text}}</p>
            <br>

            <!-- comentarios -->
            @forelse ($post->comments as $comment)
              <div class="card w-100">
                <div style="" class="card-body p-2 w-100">
                  <img width="10%" class="float-left m-2" src="/storage/{{$comment->user->fotoPerfil()}}" alt="">
                  {{-- baja de comentario --}}
                  @if ($comment->user->id == $user->id)
                    <form class="delete" action="/comment/{{$comment->id}}/eliminar" method="get">
                      <input type="hidden" name="page" value="miperfil">
                      <input type="hidden" name="id" value="{{$comment->id}}">
                      <button type="submit" name="eliminar" class="btn mb-2 float-right" style="background-color:#464655; color:white"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  @endif
                  <br>
                  <h5><a href="/perfil/{{$comment->user->id}}">{{$comment->user->name}} {{$comment->user->surname}}</a></h5>
                  <p class="mb-0">{{$comment->text}}</p>
                </div>
              </div>
              <br>
            @empty

            @endforelse
            {{-- Subida comentario --}}
            <form class="input-group commentForm" action="post/{{$post->id}}/comentar" method="post">
              @csrf
              <input type="hidden" name="page" value="miperfil">
              <input type="hidden" name="postId" value="{{$post->id}}">
              <input type="text" name="comment" class="form-control mt-2 commentText">
              <button class="btn form-control input-group-append col-2 mt-2" style="background-color:#464655; color:white" type="submit" name="comentar">Comentar</button>
            </form>

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
