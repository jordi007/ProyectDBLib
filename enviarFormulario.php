
<?php
include_once('class/class_editorial.php');
include_once('class/class_conexion.php');

       function obtenerIDEditorial($conexion){
      
      $sql = 'SELECT IIF (MAX(EditorialID) IS NULL, 1, MAX(EditorialID) + 1) EditorialID
          FROM Editorial';

      $cursor = $conexion->ejecutarConsulta($sql); 

      $EditorialID = false;

      if ($cursor) {
        if ($temp = $conexion->obtenerFila($cursor)) {
          $EditorialID = $temp['EditorialID'];
        }
      }

      return $EditorialID;
      }

    //$editorial = new Editorial(
      //$_POST[4],$_POST['hondu'],$_POST['moncho'],$_POST['moncho@moncho.com']);
       
    $conn = new Conexion();
    if ($conn->getLink()) {
      $editorial = new Editorial(obtenerIDEditorial($conn),$_POST['txt-pais'],$_POST['txt-nombre'],$_POST['txt-email']);
      $editorial = Editorial::nuevaEditorial($conn,$editorial->getEditorialId(),$editorial->getPais(),$editorial->getNombre(),$editorial->getEmail());
      obtenerIDEditorial($conn);      


    } //fin del if $conn
    //echo "ese".obtenerIDEditorial($conn);
     

    //$editorial->
    /*
    $libro = Libro::buscarLibroCodigo($conn, $_GET['codigo']);
    private $editorialId;
    private $pais;
    private $nombre;
    private $email;*/

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
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body class="bg-light">
	<!-- Navigation -->
  <?php include 'menuAdmin.php'; ?>
<div class="espacio"></div><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xl-7 mx-auto">
				<div class="col-md-12 col-lg-12 col-xl-7 mx-auto">
          <a class="btn btn-warning" href="paginaAdministrador.php">Ir a la pagina principal</a>
        </div>
        <br><br>
        <div class="col-md-12 col-lg-12 col-xl-7 mx-auto">
          <a class="btn btn-danger" href="formularioEditorial.php">Introducir otra Editorial</a>
        </div>
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


</body>

</html>
