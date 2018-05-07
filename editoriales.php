<?php
  include('class/class_conexion.php');
  include('class/class_editorial.php');
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

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
     	 <div class="container">
        	<a class="navbar-brand" href="index.php">Biblioteca 935</a>
          <nav class="my-2 my-md-0 mr-md-3">
              <a class="p-2 text-dark" href="autores.php">Autores</a>
              <a class="p-2 text-dark" href="#">Editoriales</a>
              <a class="p-2 text-dark" href="materias.php">Materias</a>
          </nav>
        	<a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>
      	</div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="h2">Editoriales:</h2>
        </div>
        <div class="col-md-6 mx-auto">
          <?php
            $conn = new Conexion();

            if ($conn->getLink()) {
              $editoriales = Editorial::listaEditoriales($conn);
              if ($editoriales) {
                echo '<table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Email</th>
                            <th scope="col">Num. Libros</th>
                            <th scope="col">Opción</th>
                          </tr>
                        </thead>
                        <tbody>';
                foreach ($editoriales as $llave => $editorial) {
                  echo '<tr>
                          <th scope="row">'.($llave+1).'</th>
                          <td>'.$editorial->getNombre().'</td>
                          <td>'.$editorial->getEmail().'</td>
                          <td>'.$editorial->numeroLibros($conn).'</td>
                          <td><a href="#">Ver libros</a></td>
                        </tr>';
                }
                echo '</tbody>
                    </table>';
              }
            }
          ?>
          <!-- <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Editorial</th>
                <th scope="col">Email</th>
                <th scope="col">Num. Libros</th>
                <th scope="col">Opción</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Santillana</td>
                <td>ajaaj@jaja.jaja</td>
                <td>10</td>
                <td><a href="#">Ver libros</a></td>
              </tr>
            </tbody>
          </table> -->
        </div>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
