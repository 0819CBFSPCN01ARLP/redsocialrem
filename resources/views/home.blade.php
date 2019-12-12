@extends('app')

@section("title")
  Home
@endsection

@section("css","/css/home.css")

@section('content')

  <div class="cuerpo row justify-content-center">

    <aside class="col-md-3 mt-5">
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

    <section class="publicaciones col-12 col-md-7 mt-5">

      <!-- Subida de publicaciones -->
      <div class="container">
        <section class = "col-lg-12 col-sm-12">
          <div class="card w-100">
            <div class="card-body w-100">
              <form class="col-lg-12 col-md-6" action="newpost" method="post" enctype="multipart/form-data">
                @csrf
                <input name="image" type="file" class="file" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
                <textarea class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1" placeholder="¿Qué estás pensando?" required></textarea>
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
            <div class="card w-100">
              <div style="" class="card-body w-100 ">
                <h3><a href="/perfil/{{$post->user->id}}">{{$post->user->name}} {{$post->user->surname}}</a></h3>
                @if (isset($post->image))
                  <img width="300" src="/storage/{{$post->image->path}}" alt="">
                @endif
                <br>
                <p>{{$post->text}}</p>
                <br>
                <form class="" action="post/{{$post->id}}/comentar" method="post">
                  @csrf
                  <input type="hidden" name="page" value="home">
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
                          <input type="hidden" name="page" value="home">
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
            <p>Agrega amigos para ver sus publicaciones.</p>
            <br><br>
          @endforelse
        </section>
      </div>

    </section>
  </div>

  <aside class="col-md-3 mt-5">
    <div class="card">
      <div class="card-header headerCartaAmigo">
        <h3>Puede que te interese</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a class="col-12"href="https://www.infotechnology.com/"><img class="col-12"src="tecnologia.jpeg"></a><h4>«Descubre y aprende todo de tecnología»</h4></li>
        <li class="list-group-item"><a class="col-12"href="https://www.espn.com.ar/"><img class="col-12"src="deportes.png"></a><h4>lo último del mundo deportivo</h4> </li>
        <li class="list-group-item"><a class="col-12"href="https://www.cinemarkhoyts.com.ar/"><img class="col-12"src="cine.jpg"></a><h4>Enterate de las novedades del cine!</h4> </li>
        <li class="list-group-item"><a class="col-12"href="https://www.20minutos.es/minuteca/conciertos/"><img class="col-12"src="conciertos.jpg"></a><h4>Averigua de los conciertos de tus bandas favoritas!</li>
          <li class="list-group-item"><a class="col-12"href="https://www.3djuegos.com/"><img class="col-12"src="juegos.jpg"></a>En 3DJuegos encontrarás Juegos, noticias, reportajes, videos, análisis y la mayor comunidad de usuarios sobre videojuegos.</li>
        </ul>
      </div>
    </aside>

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
