@extends('app')

@section("title")
  Home
@endsection

@section("css","/css/home.css")

@section('content')

  <div class="cuerpo row justify-content-center">

    <aside class="col-md-3 mt-2">
      <div class="card">
        <div class="card-header headerCartaAmigo">
          Amigos
        </div>
        <ul class="list-group list-group-flush">
          @forelse ($friends as $friend)
            @foreach ($friend->images as $image)
              @if ($image->position == "fotoPerfil")
                <li class="list-group-item">
                  <img class="fotoAmigo mr-4" src="/storage/{{$image->path}}" alt="amigo">
                  <a href="/perfil/{{$friend->id}}">{{$friend->name}} {{$friend->surname}}</a>
                </li>
              @endif
            @endforeach
          @empty
            Aún no tienes amigos.
          @endforelse
        </ul>
      </div>
    </aside>

    <section class="publicaciones col-12 col-md-7 mt-2">

      <!-- Subida de publicaciones -->
      <div class="container">
        <section class = "col-12">
          <div class="card w-100">
            <div class="card-body w-100">
              <form id="postForm" class="" action="newpost" method="post" enctype="multipart/form-data">
                @csrf
                <input id="postImage" name="image" type="file" class="file" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
                <textarea id="postText" class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1" placeholder="¿Qué estás pensando?"></textarea>
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
        <section class = "col-12">
          @forelse ($posts as $post)
            <div class="card w-100">
              <div style="" class="card-body w-100">
                <h3><a href="/perfil/{{$post->user->id}}">{{$post->user->name}} {{$post->user->surname}}</a></h3>
                @if (isset($post->image))
                  <img class="imagePost" width="100%" src="/storage/{{$post->image->path}}" alt="">
                @endif
                <br>
                <p class="ml-2 mt-2 mb-0">{{$post->text}}</p>
                <br>

                <!-- comentarios -->
                @forelse ($post->comments as $comment)
                  <div class="card w-100 mt-3">
                    <div style="" class="card-body p-2 w-100">
                      <img width="10%" class="float-left m-2" src="/storage/{{$comment->user->fotoPerfil()}}" alt="">
                      {{-- baja de comentarios --}}
                      @if ($comment->user->id == $user->id)
                        <form class="delete" action="/comment/{{$comment->id}}/eliminar" method="get">
                          <input type="hidden" name="page" value="home">
                          <input type="hidden" name="id" value="{{$comment->id}}">
                          <button type="submit" name="eliminar" class="btn mb-2 float-right" style="background-color:#464655; color:white"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      @endif
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
                  <input type="hidden" name="page" value="home">
                  <input type="hidden" name="postId" value="{{$post->id}}">
                  <input type="text" name="comment" class="form-control commentText">
                  <button class="btn form-control input-group-append col-2" style="background-color:#464655; color:white" type="submit" name="comentar">Comentar</button>
                </form>


              </div>
            </div>
            <br>
          @empty
            <p>Agrega amigos para ver sus publicaciones.</p>
            <br><br>
          @endforelse
        </section>
      </div>

    </section>
  </div>

  @endsection

  {{-- <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">Dashboard</div>

  <div class="card-body">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div> --}}
