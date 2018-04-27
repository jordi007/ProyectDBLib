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
        	<a class="btn btn-outline-primary" href="#">Iniciar Sesión</a>
      	</div>
    </nav>

<!-- BARRA DE BUSQUEDA -->

 <header class="bg-light">
  <form action="inicio.php" method="GET">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7>
                <form action="inicio.php" method="GET">
                    <div class="form-row">
                      <div class="col-12 col-md-9 mb-2 mb-md-0">
                          <input type="text" class="form-control form-control-lg" placeholder="Nombre del libro...">
                      </div>
                      <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar!</button>
                      </div>
                    </div>
                </form>
              </div>
          </div>
        </div>
  </form>
</header> 

<div class="espacio"></div>
 <!-- TABLA DE DATOS -->

<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form action="" method=""></form>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ejemplares</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><a href="informacionLibro.php"><input type="submit" class="btn btn-primary btn-sm" value="Información"></a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><a href="informacionLibro.php"><input type="submit" class="btn btn-primary btn-sm" value="Información"></a></td>
                    
                  </tr>
                </tbody>
              </table>
              </form>
          </div>


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>