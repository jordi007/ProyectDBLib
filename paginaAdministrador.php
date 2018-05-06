<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIBLIOTECA BD-I</title>

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
 
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Biblioteca 935</a>
    <!-- <a class="btn btn-outline-primary" href="#">Iniciar Sesión</a> -->  
      <ul class="nav-item dropdown">
        <span class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nombre</span>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="paginaAdministrador.php">Administrar</a>
          <a class="dropdown-item" href="#">Salir</a>
        </div>
      </ul>
    </div>
  </nav> 

  <h1 class="texto espacio" >Admin Panel para Administradores ..</h1>
            <!--<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio" placeholder="...">
                </div>

                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio" placeholder="...">
                </div><div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio" placeholder="...">
                </div><div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio" placeholder="...">
                </div><div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio " placeholder="...">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="buscar" class="form-control espacio" placeholder="...">
                </div>
              </div>
            </form>
          </div>
      

   
<div class="espacio1"></div>-->

 <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <!-- opciones para el administrador -->
          <div class="col-md-12 col-lg-12 col-xl-12 mx-auto espacio">
            <div class="container">
              <div class="col-10 mx-auto">
                <div class="espacioBajo">
                  <h3>Buscar los libros requeridos aqui!</h3>
                </div>
                <br>
              </div>
                <div class="col-8 mx-auto">
                    <form action="buscar.php" method="GET">
                        <div class="form-row">
                          <div class="col-12 col-md-9 mb-2 mb-md-0">
                              <input type="text" name="buscar" class="form-control form-control-lg" placeholder="Nombre, codigo o autor del libro" required>
                          </div>
                          <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar!</button>
                          </div>
                        </div>
                    </form>
                </div>
                <br><br>
            </div>
          </div>
          <br><br><br>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-notebook m-auto text-primary"></i>
              </div>
              <a href="libros.php"><h3>Libros</h3></a>
              <p class="lead mb-0">Agrega o edita libros</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-pencil m-auto text-primary"></i>
              </div>
              <a href="formularioEditorial.php"><h3>Editorial</h3></a>
              <p class="lead mb-0">Agrega editoriales</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-note m-auto text-primary"></i>
              </div>
              <a href="genero.php"><h3>Materias</h3></a>
              <p class="lead mb-0">Agrega materia</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-people m-auto text-primary"></i>
              </div>
              <a href="formularioAutor.php"><h3>Autores</h3></a>
              <p class="lead mb-0">Autores!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
