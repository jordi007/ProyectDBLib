<?php 
  // header('Content-Type: text/html; charset=ISO-8859-1');
  include('class/class_conexion.php');
  include('class/class_materia.php');
  include('class/class_libros.php');
  include('class/class_ejemplar.php');
    header('Content-Type: text/html; charset=iso-8859-1');
  //&oacute
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca 935</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body class="bg-light">

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      	<div class="container">
        	<a class="navbar-brand" href="index.php">Biblioteca 935</a>
          <nav class="my-2 my-md-0 mr-md-3">
              <a class="p-2 text-dark" href="autores.php">Autores</a>
              <a class="p-2 text-dark" href="editoriales.php">Editoriales</a>
              <a class="p-2 text-dark" href="materias.php">Materias</a>
          </nav>
          <?php
            session_start();
            if (isset($_SESSION["id"])){
              echo '<div class="nav-item dropdown">
                      <span class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</span>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="paginaAdministrador.php">Administrar</a>
                        <a class="dropdown-item" href="logout.php">Salir</a>
                      </div>
                    </div>';
            } else {
             echo '<a class="btn btn-outline-primary" href="login.php">Iniciar Sesi&oacuten</a>';
            }
          ?>
      	</div>
    </nav>

<div class="espacio1" ></div>
<!-- ESTRUCTURA LIBRO -->
  <div class="container">
        <div class="row">
          <!-- <div class="col-md-4 text-right">
            	<img style="width: 300px; height:400px;" src="img/ejemplo.jpg">
          </div> -->
          <div class="col-md-6 mx-auto">
            <?php 
              $conn = new Conexion();

              if ($conn->getLink()) {
                $libro = Libro::buscarLibroCodigo($conn, $_GET['codigo']);
                if ($libro) {
                  $autores = '';
                  foreach ($libro->getAutor() as $autor) {
                    $autores .= $autor->getNombre().' '.$autor->getApellido().'<br>'; 
                  }
                  echo '<div class="text-center"><h4>'.$libro->getTitulo().'</h4></div>
                        <table class="table table-condensed">
                          <tr>
                            <th class="text-right">Codigo:</th>
                            <td>'.$libro->getCodigo().'</td>
                          </tr>
                          <tr>
                            <th class="text-right">Autor(es):</th>
                            <td>'.$autores.'</td>
                          </tr>
                          <tr>
                            <th class="text-right">Editorial:</th>
                            <td>'.$libro->getEditorial()->getNombre().'</td>
                          </tr>
                          <tr>
                            <th class="text-right">Edici&oacuten:</th>
                            <td>'.$libro->getEdicion().'</td>
                          </tr>
                          <tr>
                            <th class="text-right">ISBN:</th>
                            <td>'.$libro->getIsbn().'</td>
                          <tr>
                          <tr>
                            <th class="text-right">Materia:</th>
                            <td>'.$libro->getMateria()->getNombre().'</td>
                          </tr>
                          <tr>
                            <th class="text-right">A&ntilde;o:</th>
                            <td>'.$libro->getAnio().'</td>
                          </tr>
                          <tr>
                            <th class="text-right">Descripci&oacute;n</th>
                            <td>'.$libro->getDescripcion().'</td>
                          </tr>
                      </table>';
                } else {
                  echo '<h3>Ups... Este libro no existe</h3>
                        <a class="link" href="index.php">Regresar a inicio</a>';
                }
              }
            ?>
          </div>
        </div>
      </div>

 <div class="espacio1"></div>

 <!-- TABLA DE DATOS -->
  <div class="container">
    <div class="row">
      <div class="col-9 mx-auto">
          <?php 
            if ($libro) {
              if(count($libro->getEjemplar()) > 0) {
                echo '<h4>Ejemplares:</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Observaci&oacute;n</th>
                          <th scope="col">Diponible</th>
                          <th scope="col">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>';
                foreach ($libro->getEjemplar() as $i => $ejemplar) {
                  echo '<tr>
                          <th scope="row">'.($i+1).'</th>
                          <td>'.$ejemplar->getEstado().'</td>
                          <td>'.$ejemplar->getObservacion().'</td>';
                  if ($ejemplar->isDisponible()) {
                    echo '<td>Si</td>
                          <td><a href="prestarLibro.php?codigo='.$libro->getCodigo()
                          .'&ejemplar='.$ejemplar->getIndice()
                          .'&titulo='.$libro->getTitulo().'"class="btn btn-primary btn-sm">Prestar</a></td>';
                  } else {
                    echo '<td>No</td>';
                  }
                  echo  '</tr>';
                }
                echo '</tbody>
                    </table>';
              } else {
                echo "<h5>No hay ejemplares disponibles</h5>";
              }
            }
          ?>
          </div>
        <div>
      <div>


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
