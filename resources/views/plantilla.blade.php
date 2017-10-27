<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/miCSS.css">
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <ul>
            <li>Home</li>
            <li>Peliculas</li>
            <li>Generos</li>
            <li>Actores</li>
            <li>Series</li>
          </ul>
        </nav>
      </header>
      @yield("contenido")
    </div>
  </body>
</html>
