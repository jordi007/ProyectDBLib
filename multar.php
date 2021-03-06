<?php
  session_start();
  if (!isset($_SESSION["id"])){
    header("Location: index.php");
  }
  include('class/class_conexion.php');
  include('class/class_prestamo.php');
  include('mail.php');
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
        	<?php
            if (isset($_SESSION["id"])){
              echo '<div class="nav-item dropdown">
                      <span class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</span>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="paginaAdministrador.php">Administrar</a>
                        <a class="dropdown-item" href="regresarLibro.php">Recibir Libro</a>
                        <a class="dropdown-item" href="usuariosSuscriptores.php">Ver Suscritores</a>
                        <a class="dropdown-item" href="usuariosBibliotecarios.php">Ver Bibliotecarios</a>
                        <a class="dropdown-item" href="logout.php">Salir</a>
                      </div>
                    </div>';
            } else {
             echo '<a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>';
            }
          ?>
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
                      <td>'.((Correo::enviarCorreo($value['Email'], $value['Titulo'],
                        $value['Multa'], $value['NombreCompleto'])) ? 'Si' : 'No').'</td>';
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