<?php 
	include('../class/class_conexion.php');
	include('../class/class_suscriptor.php');
	include('../class/class_libros.php');
	include('../class/class_prestamo.php');
	// print_r($_POST);

	$conn = new Conexion();

	if ($conn) {
		if ($suscriptor = Suscriptor::buscarSuscriptorEmail($conn, $_POST['txt-email'])) {
			if ($libro = Libro::buscarLibroCodigo($conn, $_POST['txt-codigo'])) {
				if ($prestamoId = Prestamo::siguientePrestamoId($conn)) {
					Prestamo::nuevoPrestamo($conn, $prestamoId, $libro->getLibroId(),
							$_POST['txt-nejemplar'], 1, $suscriptor->getSuscriptorId(), date('Y-m-d'), 
							$_POST['txt-fecha-entrega']);
				}
			}
		} else {
			echo "El usuario no existe";
		}
	}
?>