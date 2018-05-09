<?php
  include_once('class/class_conexion.php');
  include_once('class/class_materia.php');
  include_once('class/class_libros.php');
  include_once('class/class_autor.php');
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

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
       <div class="container">
          <a class="navbar-brand" href="index.php">Biblioteca 935</a>
          <nav class="my-2 my-md-0 mr-md-3">
              <a class="p-2 text-dark" href="autores.php">Autores</a>
              <a class="p-2 text-dark" href="editoriales.php">Editoriales</a>
              <a class="p-2 text-dark" href="materias.php">Materias</a>
          </nav>
          <a class="btn btn-outline-primary" href="login.php">Iniciar Sesi&oacuten</a>
        </div>
    </nav>

    <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <?php
          echo '<h2>'.$_GET['materia'].':</h2>'
        ?>
      </div>
      <div class="col-12">
          <?php
            $conn = new Conexion();
            if ($conn->getLink()) {
              $resultado = Libro::buscarLibro($conn, $_GET['codigo']);
              if ($resultado) {
                echo '<table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Libro</th>
                            <th scope="col">Edición</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Ejemplares</th>
                            <th scope="col">Opci&oacuten</th>
                          </tr>
                        </thead>
                        <tbody>';
                  foreach ($resultado as $llave => $valor) {
                    $autores = '';
                    $res = Autor::buscarAutorLibro($conn, $valor['Codigo']);

                    if ($res) {
                      foreach ($res as $autor) {
                        $autores .= $autor->getNombre() .' ' .$autor->getApellido() . ' - ';
                      }
                    }

                    echo '<tr>
                          <th scope="row">'.$valor['Codigo'].'</th>
                          <td>'.utf8_encode($valor['Titulo']).'</td>
                          <td>'.$valor['Edicion'].'</td>
                          <td>'.$autores.'</td>
                          <td>'.$valor['NEjemplares'].'</td>
                          <td><a href="informacionLibro.php?codigo='.$valor['Codigo'].'">Ver m&aacutes</a></td>
                        </tr>';
                  }
                  echo '</tbody>
                       </table>';
                } else {
                  echo "<h2>No tiene libros</h2>";
                } 
              }
          ?>
        </div>
      </div>
  
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
