<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/bienvenidos", function() {
  echo "Bienvenidos!";
});

Route::get("/saludar/{nombre}", function($nombre) {
  echo "Hola $nombre";
});

Route::get("/buscarActores/{buscar}", "ActoresController@buscar");

Route::get("/agregarPelicula", "PeliculasController@agregar");
Route::get("/peliculas/{id}", "PeliculasController@detalle");
Route::get("/peliculas", "PeliculasController@listado");

















Route::get('/', function () {
    return view('welcome');
});
