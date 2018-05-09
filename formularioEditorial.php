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
  <body>    
 
      <?php  include 'menuAdmin.php';
             include('class/class_conexion.php'); 
       ?> 

         <h1 class="texto espacio " >Ingresar datos editoriales..</h1>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="enviarFormulario.php" method="POST">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  Nombre de la editorial<input type="text" name="txt-nombre" class="form-control espacio" pattern="^[A-Za-z]+" required placeholder="Ingresar nombre">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  E-mail<input type="email" name="txt-email" class="form-control espacio" required placeholder="Ingresar el E-mail">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  Pais de la editorial<input type="text" name="txt-pais" class="form-control espacio " pattern="^[0-9]+" required placeholder="Ingrese el pais de procedencia">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="submit" class="btn btn-primary espacio" placeholder="Buscar...">
                </div>
              </div>
            </form>
          </div>
         
<div class="espacio1"></div>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
