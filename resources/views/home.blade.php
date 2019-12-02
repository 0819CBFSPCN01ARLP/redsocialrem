@extends('app')

@section("title")
  Home
@endsection

@section("css","/css/home.css")

@section('content')
  <div class="cuerpo row justify-content-center">

    <aside class="col-md-4 mt-5">
      <div class="card">
        <div class="card-header headerCartaAmigo">
          Amigos
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 1</li>
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 2</li>
          <li class="list-group-item"><img class="fotoAmigo" src="gato.png" alt="amigo"> Amigo 3</li>
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
            Usuario
          </div>
          <div class="card-body">
            <h5 class="card-title">Mi publicación</h5>
            <p class="card-text">Esto es una publicación</p>
          </div>
        </div>
      </section>

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
