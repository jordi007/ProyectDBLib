<?php
  include('class/class_conexion.php');
  include('class/class_prestamo.php');
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
        	<a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>
      	</div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
       <h2 class="h2">Multados:</h2>
        </div>
        <div class="col-md-12 mx-auto">
          <?php
            $conn = new Conexion();

            if ($conn->getLink()) {
              if (Prestamo::ejecutarMultas($conn)) {
                $multados = Prestamo::regresarDeudores($conn);
                if (count($multados) > 0) {
                  echo '<table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Multa</th>
                        <th scope="col">Libro</th>
                        <th scope="col">Correo enviado</th>
                      </tr>
                    </thead>
                    <tbody>';
                  foreach ($multados as $key => $value) {
                    echo '<tr>
                      <th scope="row">'.($key + 1).'</th>
                      <td>'.$value['NombreCompleto'].'</td>
                      <td>'.$value['Email'].'</td>
                      <td> L. '.$value['Multa'].'</td>
                      <td>'.$value['Titulo'].'</td>
                      <td>SI</td>'; 
                      Correo::enviarCorreo($value['Email'], $value['Titulo'], $value['Multa'], $value['NombreCompleto']);
                      /*Gabriel aqui deberia ir el llamado a la funcion enviar correo*/
                  }
                }
              } else {
                echo '<h5>Hoy no ubieron multados</h5>';
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