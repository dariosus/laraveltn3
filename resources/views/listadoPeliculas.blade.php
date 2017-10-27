@extends("plantilla")

@section("titulo")
  Listado
@endsection

@section("contenido")
  <h1>Mis películas</h1>
  <ul>
      @forelse ($peliculas as $key => $pelicula)
        <li>
          <a href="/peliculas/<?=$key?>">
            <?=$pelicula?>
          </a>
        </li>
      @empty
          <p>No hay pelis</p>
      @endforelse
  </ul>
@endsection
