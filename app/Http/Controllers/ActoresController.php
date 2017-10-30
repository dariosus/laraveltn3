<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function buscar($buscar) {
      $actores = Actor::where("first_name","LIKE","%$buscar%")
                  ->orWhere("last_name","LIKE","%$buscar%")
                  ->orderBy("first_name", "DESC")
                  ->get();

      $data = compact("actores");

      return view("listadoActores", $data);
    }
}
