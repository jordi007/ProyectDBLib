<?php
  include('class/class_conexion.php');
  include('class/class_materia.php');
  include('class/class_libros.php');
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
              <a class="p-2 text-dark" href="#">Materias</a>
          </nav>
          <a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>
        </div>
    </nav>

    <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Autores:</h2>
      </div>
      <div class="col-md-10 col-lg-10 col-xl-10 mx-auto">
          <?php
            $conn = new Conexion();
             if ($conn->getLink()) {

              $libros = Materia::listaDelAutores($conn);
            
              if ($libros) {
                foreach ($libros as $llave => $libro) {
               echo '<th scope="col">'.$llave."=".$libro.'<br>';              
           
            }
                echo '<table class="table table-hover">
            <thead>
              <tr> <th scope="col">#</th>
                 <th scope="col">Codigo</th>
                <th scope="col">Titulo</th>
                <th scope="col">Edicion</th>
                <th scope="col">ISBN</th>
                <th scope="col">Año</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Nombre De La Materia</th>
              </tr>
            </thead>
            <tbody>';
              foreach ($libros as $llave => $libro) {
               echo '<th scope="col">'.$llave."=".$libro.'<br>';              
           
            }
            echo'
            </tbody>
          </table>';
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
