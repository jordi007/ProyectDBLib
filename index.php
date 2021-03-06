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
          <?php
            session_start();
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

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      	<div class="overlay"></div>
      	<div class="container">
	        <div class="row">
    			<div class="col-xl-9 mx-auto">
            		<h1 class="mb-5">Buscar Libro</h1>
          		</div>
          		<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            		<form action="buscar.php" method="GET">
              			<div class="form-row">
                			<div class="col-12 col-md-9 mb-2 mb-md-0">
                  				<input type="text" name="buscar" class="form-control form-control-lg" placeholder="Nombre o codigo libro" required>
                			</div>
                			<div class="col-12 col-md-3">
                 				<button type="submit" class="btn btn-block btn-lg btn-primary">Buscar!</button>
                			</div>
              			</div>
            		</form>
          		</div>
        	</div>
      	</div>
    </header>  

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
