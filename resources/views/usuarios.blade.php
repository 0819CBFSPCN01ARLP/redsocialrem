@extends('app')

@section("title")
  Amigos
@endsection

@section("css","/css/amigos.css")

@section('content')

  <h1>Usuarios</h1>
  <br>
  <!-- Todos los usuarios -->
  <section class="row w-100">
    @foreach ($users as $user)
      <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters p-3">
          <div class="col-11 col-md-4 mx-auto">
            @foreach ($user->images as $image)
              @if ($image->position == "fotoPerfil")
                <img src="storage/{{$image->path}}" class="card-img" alt="...">
              @endif
            @endforeach
          </div>
          <div class="col-11 col-md-6 p-1">
            <div class="card-body">
              <h4 class="card-title">
                <a href="/perfil/{{$user->id}}">{{$user->name}} {{$user->surname}}</a>
              </h4>
              <h6 class="card-text">{{$user->email}}</h6>
              <p class="card-text"><small class="text-muted">Miembro desde: {{$user->created_at}}</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  </section>
  <br>

@endsection()
