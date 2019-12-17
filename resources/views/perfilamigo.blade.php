@extends('app')

@section("title")
  {{$friend->name}}
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
    <div class="mb-5">
      <section id=perfil class ="text-center">
        <article class="col-6 m-auto">
          <div class="card">
            <div class=" card-body">
              @foreach ($images as $image)
                @if ($image->position == "fotoPerfil")
                  <img class="col-5" src="/storage/{{$image->path}}">
                @endif
              @endforeach
              <h3 class="float-right">{{$friend->name}} {{$friend->surname}}</h3>
              @if ($user->isFriend($friend->id) !== null)
                <form action="/perfil/{{$friend->id}}/eliminaramigo" method="get">
                  @csrf
                  <input type="hidden" name="id_friend" value="{{$friend->id}}">
                  <button class="btn float-right" style="background-color:#464655; color:white" type="submit" name="button">Eliminar amigo</button>
                </form>
              @else
                <form class="" action="/perfil/{{$friend->id}}/agregaramigo" method="get">
                  @csrf
                  <input type="hidden" name="id_friend" value="{{$friend->id}}">
                  <button class="btn float-right" style="background-color:#464655; color:white" type="submit" name="button">Agregar amigo</button>
                </form>
              @endif
            </div>
          </div>
        </article>
      </section>
    </div>
    <br>

    <!-- Publicaciones -->
    <div class="container">
      <section class = "col-10 m-auto">
        @forelse ($posts as $post)
        <div class="card w-100">
          <div style="" class="card-body w-100 ">
            <h3>{{$post->user->name}} {{$post->user->surname}}</h3>
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
                <div class="card-body p-2 w-100">
                  <img width="10%" class="float-left m-2" src="/storage/{{$comment->user->fotoPerfil()}}" alt="">
                  {{-- baja de comentario --}}
                  @if ($comment->user->id == $user->id)
                    <form class="delete" action="/comment/{{$comment->id}}/eliminar" method="get">
                      <input type="hidden" name="page" value="{{$friend->id}}">
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
            <form class="input-group commentForm" action="/post/{{$post->id}}/comentar" method="post">
              @csrf
              <input type="hidden" name="page" value="{{$friend->id}}">
              <input type="hidden" name="postId" value="{{$post->id}}">
              <input type="text" name="comment" class="form-control commentText">
              <button class="btn form-control input-group-append col-2" style="background-color:#464655; color:white" type="submit" name="comentar">Comentar</button>
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
