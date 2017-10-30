@extends("plantilla")

@section("titulo")
  Detalle de la peli
@endsection

@section("contenido")
      <h1>Mis películas</h1>
      <h2>Usted ha elegido {{$peliFinal->title}}</h2>
      <p>La peli se estrenó el {{$peliFinal->release_date}}</p>
      <p>La peli tiene {{$peliFinal->awards}} premios</p>
@endsection
