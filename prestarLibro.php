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
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

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

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="h1">Prestar Libro</h1>
      </div>
      <div class="col-md-5 col-lg-5 col-xl-5 mx-auto">
        <form>
          <div class="form-group">
            <label for="txt-titulo">Título:</label>
            <input type="text" class="form-control" id="txt-titulo" value="Hola mundo" disabled>
          </div>
          <div class="form-group">
            <label for="txt-codigo">Codigo:</label>
            <input type="text" class="form-control col-sm-3" value="FS-1010" id="txt-codigo" disabled>
          </div>
          <div class="form-group">
            <label for="txt-nejemplar">Num. de Ejemplar</label>
            <input type="text" class="form-control col-sm-3" id="txt-nejemplar" disabled>
          </div>
          <div class="form-group">
            <label for="txt-email">Email suscritor:</label>
            <div class="container">
              <div class="row">
                <input type="email" class="form-control col-7" id="txt-email">
                <span class="col-1"></span>
                <input type="button"  class="btn btn-primary" id="btn-nuevo" value="Nuevo suscritor">
              </div>
            </div>
            <div id="div-suscriptor" class="form-group">
              <label for="txt-nombre">Nombre:</label>
              <input type="text" class="form-control" id="txt-nombre">
              <label for="txt-apellido">Apellido:</label>
              <input type="text" class="form-control" id="txt-apellido">
              <label for="txt-telefono">telefono:</label>
              <input type="text" class="form-control" id="txt-telefono">
              <div>El usuario no existe...</div>
              <br>
              <input type="button" class="btn btn-primary" name="btn-guardar" id="btn-guardar" value="Crear">
              <input type="button" class="btn btn-danger" name="btn-canselarc" id="btn-cancelarc" value="Cancelar">
            </div>
          </div>
          <div class="form-group">
            <label for="txt-fecha-inicio">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="txt-fecha-inicio" disabled>
          </div>
          <div class="form-group">
            <label for="txt-fecha-entrega">Fecha de entrega:</label>
            <input type="date" class="form-control" id="txt-fecha-entrega">
          </div>
          <button type="submit" id="btn-prestar" class="btn btn-outline-primary">Prestar</button>
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
  <script src="js/js_sistema/prestarLibro.js"></script>


</body>

</html>
