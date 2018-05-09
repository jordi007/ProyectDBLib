<?php
	session_start();
    if (isset($_SESSION["id"])){
		include('../class/class_conexion.php');
		include('../class/class_suscriptor.php');
		include('../class/class_materia.php');
		include('../class/class_libros.php');
		include('../class/class_prestamo.php');

		$conn = new Conexion();

		$respuesta['email'] = false;
		$respuesta['libro'] = false;
		$respuesta['realizado'] = false;
		$respuesta['msg'] = '';

		

		if ($libro = Libro::buscarLibroCodigo($conn, $_POST['txt-codigo'])) {
			if (!Ejemplar::ejemplarDisponible($conn, $libro->getLibroId(), $_POST['txt-nejemplar'])) {
				$respuesta['libro'] = true;

				if ($suscriptor = Suscriptor::buscarSuscriptorEmail($conn, $_POST['txt-email'])) {
					if (Prestamo::esResponsable($conn, $libro->getLibroId(),
					 		$_POST['txt-nejemplar'], $suscriptor->getSuscriptorId())) {
						$respuesta['email'] = true;

						if (Prestamo::resgresarPrestamo($conn, $libro->getLibroId(),
					 		$_POST['txt-nejemplar'], $suscriptor->getSuscriptorId())) {
							$respuesta['realizado'] = true;
							$respuesta['msg'] = "Entrega exitosa";
						} else {
							$respuesta['msg'] = "No se pudo realizar la entrega";
						}
					} else {
						$respuesta['msg'] = "El suscriptor no es el responsable";
					}
				} else {
					$respuesta['msg'] = "El suscriptor no existe";
				}
			} else {
				$respuesta['msg'] = "El ejemplar ya esta en la biblioteca";
			}
		} else {
			$respuesta['msg'] = "No se reconoce el codigo del libro";
		}

		echo json_encode($respuesta);
	}
?>