<?php 
  include 'class/class_conexion.php';
  include 'class/class_libros.php';
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
      	<a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>
    	</div>
  </nav>

  <!-- BARRA DE BUSQUEDA -->

    <header class="bg-light">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="buscar.php" method="GET">
                    <div class="form-row">
                      <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="text" name="buscar" required class="form-control form-control-xs" value="<?php echo $_GET['buscar'] ?>" placeholder="Nombre del libro...">
                      </div>
                      <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-xs btn-primary">Buscar!</button>
                      </div>
                    </div>
                </form>
              </div>
          </div>
        </div>
    </header> 

    <div class="espacio"></div>
    <!-- TABLA DE DATOS -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php
            $conn = New Conexion();
            if ($conn->getLink()) {
              $resultado = Libro::buscarLibro($conn, $_GET['buscar']);
              if ($resultado) {
                echo '<table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Libro</th>
                            <th scope="col">Edición</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Ejemplares</th>
                            <th scope="col">Opción</th>
                          </tr>
                        </thead>
                        <tbody>';
                  foreach ($resultado as $llave => $valor) {
                    $autores = '';
                    $res = Autor::buscarAutorLibro($conn, $valor['Codigo']);

                    if ($res) {
                      foreach ($res as $autor) {
                        $autores .= $autor['Nombre'] .' ' .$autor['Apellido'] . ' - ';
                      }
                    }

                    echo '<tr>
                          <th scope="row">'.$valor['Codigo'].'</th>
                          <td>'.utf8_encode($valor['Titulo']).'</td>
                          <td>'.$valor['Edicion'].'</td>
                          <td>'.$autores.'</td>
                          <td>'.$valor['NEjemplares'].'</td>
                          <td><a href="informacionLibro.php?codigo='.$valor['Codigo'].'">Ver más</a></td>
                        </tr>';
                  }
                  echo '</tbody>
                       </table>';
                } else {
                  echo "<h2>No existe</h2>";
                } 
              }          
          ?>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>