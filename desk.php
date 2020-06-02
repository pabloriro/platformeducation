<?php require_once('pages/navs/navalumno.php'); ?>

<?php require_once('pages/body/alumno/deskalum.php') ?>

<?php require_once('pages/footers/footer1.php'); ?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Eduped</title>
  </head>
  <body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
<a class="navbar-brand text-white" href="desk.php">Eduped</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto my-4 my-lg-0">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="desk.php">Escritorio</a>
      </li>
  </ul>
</div>
</nav>
 </header>

<div class="bg-primary">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron bg-primary">
    <div class="container text-white">
      <br>
      <h1 class="display-3">Bienvenido al prekinder (.letra.)</h1>
      <p>Hola (.nombre del alumno.). En esta plataforma encontraras todos los contenidos que necesitas. Selecciona las asignaturas y a trabajar</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3 bg-danger text-white text-center">
        <br>
        <h2>Lenguaje y Comunicación</h2>
        <br><br>
        <a href="leng.php" class="btn btn-danger stretched-link btn-block">Ir a este ramo</a>
        <br>
    </div>
      
    <div class="col-md-3 bg-warning text-info text-center">
        <br>
        <h2>Ciencias Naturales</h2>
        <br><br>
        <a href="cien.php" class="btn btn-warning stretched-link btn-block text-info btn-block">Ir a este ramo</a>
    </div>

    <div class="col-md-3 bg-success text-danger text-center">
      <br>  
      <h2>Historia y Geografía</h2>
        <br>
        <br>
        <a href="hist.php" class="btn btn-success stretched-link btn-block text-danger btn-block">Ir a este ramo</a>
      </div>

      <div class="col-md-3 bg-info text-warning text-center">
        <br>
        <br>
        <h2>Matemáticas</h2>
        <br>
        <br>
        <a href="mat.php" class="btn btn-info stretched-link btn-block text-warning btn-block">Ir a este ramo</a>
    </div>
    </div>

    </div>
     <!-- /container -->

<footer class="text-muted text-white bg-dark text-center">
  <div class="container">
    <p> </p> <br><br>
    <a class="nav-link js-scroll-trigger text-white" href="registro.php"> </a>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>