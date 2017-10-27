<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function agregar() {
      return view("agregarPelicula");
    }

    public function detalle($id) {
      $peliculas = [
        "Mi pobre angelito",
        "Buscando a Nemo",
        "Toy Story"
      ];

      $peliFinal = $peliculas[$id];

      $data = compact("peliFinal");

      return view("detallePelicula", $data);
    }

    public function listado() {
      $peliculas = [
        "Mi pobre angelito",
        "Buscando a Nemo",
        "Toy Story"
      ];

      $data = compact("peliculas");

      return view("listadoPeliculas", $data);
    }
}
