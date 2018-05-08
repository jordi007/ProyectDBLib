<?php 
	include('../class/class_conexion.php');
	include('../class/class_suscriptor.php');
	include('../class/class_libros.php');
	include('../class/class_prestamo.php');
	// print_r($_POST);

	$conn = new Conexion();

	$respuesta['fecha'] = false;
	$respuesta['email'] = false;
	$respuesta['libro'] = false;
	$respuesta['realizado'] = false;

	if ($conn) {
		if ($suscriptor = Suscriptor::buscarSuscriptorEmail($conn, $_POST['txt-email'])) {
			$respuesta['email'] = true;

			if (strtotime(date('Y-m-d')) < strtotime($_POST['txt-fecha-entrega'])) {
				$respuesta['fecha'] = true;
				
				if ($libro = Libro::buscarLibroCodigo($conn, $_POST['txt-codigo'])) {
					$respuesta['libro'] = true;

					if ($prestamoId = Prestamo::siguientePrestamoId($conn)) {
						if (Prestamo::nuevoPrestamo($conn, $prestamoId, $libro->getLibroId(),
								$_POST['txt-nejemplar'], 1, $suscriptor->getSuscriptorId(), date('Y-m-d'), 
							$_POST['txt-fecha-entrega'])) {

							$respuesta['realizado'] = true;
						}
					}
				}
			}
		}
	}

	echo json_encode($respuesta).'<br>';
?>