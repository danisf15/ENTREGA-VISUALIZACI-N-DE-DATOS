
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="…">
    <meta name="author" content="…">
    <title>Elecciones Chile 2017</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Elecciones Presidenciales y Parlamentarias 2017 Chile</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">Presidentes</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='senadores.php'){?>active<?php };?>"><a class="nav-link" href="senadores-genero.php">Senadores Genero</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados.php'){?>active<?php };?>"><a class="nav-link" href="senadores-pactos.php">Senadores Pactos</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados.php'){?>active<?php };?>"><a class="nav-link" href="diputados-genero.php">Diputados Genero</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados.php'){?>active<?php };?>"><a class="nav-link" href="diputados-pactos.php">Diputados Pactos</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='diputados.php'){?>active<?php };?>"><a class="nav-link" href="visualizaciones.php">Visualizaciones</a></li>

        </ul>
      </div>
    </nav>
