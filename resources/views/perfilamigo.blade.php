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
    <div id=banner class="mb-5">
      <i id=camarita class="fas fa-camera-retro"></i>
      {{-- no se puede usar modal-dialog porque rompe el examinar para subir una nueva foto de perfil --}}
      <section id=perfil class ="text-center">
        <article class="col-12 col-md-12 col-sm-12">
          <div class=" card-body w-100">
            @foreach ($images as $image)
              @if ($image->position == "fotoPerfil")
                <img id="mi-foto" style="margin-left:25%; width:20%" class="col-5 col-md-6 col-sm-6" src="/storage/{{$image->path}}">
              @endif
            @endforeach
            <h3>{{$friend->name}} {{$friend->surname}}</h3>
            @if ($user->isFriend($friend->id) !== null)
              <form class="" action="/perfil/{{$friend->id}}/eliminaramigo" method="get">
                @csrf
                <input type="hidden" name="id_friend" value="{{$friend->id}}">
                <button class="btn" style="background-color:#464655; color:white" type="submit" name="button">Eliminar amigo</button>
              </form>
            @else
              <form class="" action="/perfil/{{$friend->id}}/agregaramigo" method="get">
                @csrf
                <input type="hidden" name="id_friend" value="{{$friend->id}}">
                <button class="btn" style="background-color:#464655; color:white" type="submit" name="button">Agregar amigo</button>
              </form>
            @endif
          </div>
        </article>
      </section>
    </div>
    <br><br>

    <!-- Publicaciones -->
    <div class="mt-5 container">
      <section class = "col-lg-10 col-sm-10">
        @forelse ($posts as $post)
        <div class="card w-100">
          <div style="" class="card-body w-100 ">
            <h3>{{$post->user->name}} {{$post->user->surname}}</h3>
            @foreach ($images as $image)
              @if ($post->id_image == $image->id)
                <img src="/storage/{{$image->path}}" width="200" alt="">
              @endif
            @endforeach
            <br>
            <p>{{$post->text}}</p>
            <br>
            <form class="" action="/post/{{$post->id}}/comentar" method="post">
              @csrf
              <input type="hidden" name="page" value="{{$friend->id}}">
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
                      <input type="hidden" name="page" value="{{$friend->id}}">
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
