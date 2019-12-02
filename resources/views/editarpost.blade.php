@extends('app')

@section("title")
  Editar post
@endsection

@section("css","/css/perfil.css")

@section('content')
  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="container">
    <section class = "col-lg-12 col-sm-12">
      <div class="card w-100">
        <div class="card-header">
            Ingrese solo lo que desea modificar.
        </div>
        <div class="card-body w-100">
          <form class="col-lg-12 col-md-6" action="/guardarcambios" method="post" enctype="multipart/form-data">
            @csrf
            <input name="image" type="file" class="file" multipledata-show-upload="false" data-show-caption="true" data-msg-placeholder="Seleccione una foto...">
            <textarea class="col-sm-6 col-md-8 col-lg-9 mt-2" name="text" rows="1" value="{{$post->text}}">{{$post->text}}</textarea>
            <img src="/storage/{{$image->path}}" alt="">
            <br>
            <input type="hidden" name="post" value="{{$post->id}}">
            <button style="background-color:#464655; color:white" class="btn mt-2 ml-3" type="submit">Publicar</button>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection
