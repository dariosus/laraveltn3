<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
    public function agregar() {
      return view("agregarPelicula");
    }

    public function detalle($id) {

      $peliFinal = Pelicula::find($id);

      $data = compact("peliFinal");

      return view("detallePelicula", $data);
    }

    public function listado() {
      $peliculas = Pelicula::all();

      $data = compact("peliculas");

      return view("listadoPeliculas", $data);
    }
}
