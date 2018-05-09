<?php 
    session_start();
    if (!isset($_SESSION["id"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="ISO-8859-1">
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
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body class="bg-light">

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    	<div class="container">
      	<a class="navbar-brand" href="index.php">Biblioteca 935</a>
      	<!-- <a class="btn btn-outline-primary" href="#">Iniciar Sesión</a> -->  
        <div class="nav-item dropdown">
          <span class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></span>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="paginaAdministrador.php">Administrar</a>
            <a class="dropdown-item" href="logout.php">Salir</a>
          </div>
        </div>
    	</div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="h1">Prestar Libro</h1>
      </div>
      <div class="col-md-5 col-lg-5 col-xl-5 mx-auto">
        <form method="POST" action="accionPrestar.php">
          <div class="form-group">
            <label for="txt-email">Email bibliotecario:</label>
            <input type="email" name="txt-email" class="form-control" required id="txt-email">
          </div>
          <div class="form-group">
            <label for="txt-nombre">Nombre:</label>
            <input type="text" class="form-control" id="txt-nombre">
          </div>
          <div class="form-group">
            <label for="txt-apellido">Apellido:</label>
            <input type="text" class="form-control" id="txt-apellido">
          </div>
          <div class="form-group">
            <label for="txt-telefono">Telefono:</label>
            <input type="text" class="form-control" id="txt-telefono" placeholder="dddd-dddd">
          </div>
          <div class="form-group">
            <label for="txt-sueldo">Salario:</label>
            <input type="text" class="form-control" id="txt-sueldo">
          </div>
          <div class="form-group">
            <label for="txt-password1">Contraseña:</label>
            <input type="password" class="form-control" id="txt-password1">
          </div>
          <div class="form-group">
            <label for="txt-password2">Repetir Contraseña:</label>
            <input type="password" class="form-control" id="txt-password2">
          </div>
          <div class="form-group">
            <label for="txt-password3">Contraseña root:</label>
            <input type="password" class="form-control" id="txt-password3">
          </div>
          <div class="form-group">
            <input type="button" id="btn-registrar" name="btn-registrar" class="btn btn-outline-primary" value="Registrar">
          </div>
          <p id="div-msg"></p>
        </form>
      </div>
    </div>
  </div>

  <footer class="footer container">
    <div class="row">
      <p class="col-md-12 text-center">Biblioteca 935. Todos los derechos reservados</p>
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/js_sistema/registrarBibliotecarios.js"></script>


</body>

</html>
