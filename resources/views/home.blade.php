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
        <h3>Amigos</h3>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 1</li>
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 2</li>
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 3</li>
        </ul>
      </div>
    </aside>

    <section class="publicaciones col-12 col-md-5 mt-5">

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

      <section class="">
        <div class="card w-100 bg-light mb-3">
          <div class="card-header">
              <img class="col-2 col-md-2 col-sm-2" src="PERFIL-COMENTARIO.jpg" alt="">
            Usuario
          </div>
          <div class="card-body">
            <h5 class="card-title">Mi publicación</h5>
            <p class="card-text">Esto es una publicación</p>
            <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Editar</button>
            <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Comentar</button>
            <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Eliminar</button>
          </div>
        </div>
      </section>
      <div class="card w-100 bg-light mb-3">
        <div class="card-header">
          <img class="col-2 col-md-2 col-sm-2" src="gato.png" alt="">
          Amigo X
        </div>
        <div class="card-body">
          <p class="card-text">Esto es una publicación</p>
          <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit" name="post">Comentar</button>
        </div>

      </div>
    </section>
    <aside class="col-md-3 mt-5">
      <div class="card">
        <div class="card-header headerCartaAmigo">
          <h3>Puede que te interese</h3>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a class="col-12"href="https://www.infotechnology.com/"><img class="col-12"src="tecnologia.jpeg"></a><h4>«Descubre y aprende todo de tecnología»</h4> </li>
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
