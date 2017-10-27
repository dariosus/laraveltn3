@extends("plantilla")

@section("titulo")
  Agregar Película
@endsection

@section("contenido")
  <form class="" action="/agregarPelicula" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Titulo</label>
      <input type="text" name="titulo" value="" class="form-control">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Agregar">
    </div>
  </form>
@endsection
