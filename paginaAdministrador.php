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
        <span class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</span>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="paginaAdministrador.php">Administrar</a>
         <button type="button" class="dropdown-item" data-toggle="modal" data-target="#bibliotecario">Nuevo Bibliotecario
          </button>
          <a class="dropdown-item" href="#">Salir</a>

        </div>
      </ul>
    </div>
  </nav>

   <!-- Modal -->
  <div class="modal fade" id="bibliotecario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Bibliotecario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!--Formulario-->
          <!--<div id="div-suscriptor" class="form-group">-->
              <label for="txt-email">Email:</label>
              <input type="email" class="form-control" id="txt-email">
              <label for="txt-nombre">Nombre:</label>
              <input type="text" class="form-control" id="txt-nombre">
              <label for="txt-apellido">Apellido:</label>
              <input type="text" class="form-control" id="txt-apellido">
              <label for="txt-telefono">telefono:</label>
              <input type="text" class="form-control" id="txt-telefono" placeholder="dddd-dddd">
              <label for="txt-sueldo">Salario:</label>
              <input type="text" class="form-control" id="txt-sueldo">
              <label for="txt-password1">Contraseña:</label>
              <input type="password" class="form-control" id="txt-password1">
              <label for="txt-password2">Repetir Contraseña:</label>
              <input type="password" class="form-control" id="txt-password2">
              <label for="txt-password3">Contraseña root:</label>
              <input type="password" class="form-control" id="txt-password3">
              <div id="div-msg">registrando usuario</div>
              <br>
        <!--Fin formularios-->
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-primary" name="btn-registrar" id="btn-registrar" value="Registrar">
        <input type="button" class="btn btn-success" name="btn-cancelarc" id="btn-cancelarc" value="Limpiar">
      </div>
    </div>
  </div>
</div>
  <!--Modal fin-->


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
    <script src="js/js_sistema/registrarBibliotecarios.js"></script>

  </body>

</html>
