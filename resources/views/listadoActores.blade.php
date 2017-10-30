@extends("plantilla");

@section("contenido")
  <ul>
    @foreach($actores as $actor)
      <li>
        {{$actor->getNombreCompleto()}}
      </li>
    @endforeach
  </ul>
@endsection
