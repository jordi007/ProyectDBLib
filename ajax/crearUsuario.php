<?php
	include('../class/class_conexion.php');
	include('../class/class_suscriptor.php');

	$resultado['realizado'] = false;
	$resultado['email'] = false;
	$resultado['nombre'] = false;
	$resultado['apellido'] = false;
	$resultado['telefono'] = false;
	$resultado['msg'] = "";

	if ($conn = new Conexion()) {
		if (filter_var($_POST['txt-email'], FILTER_VALIDATE_EMAIL)) {
			if (!Suscriptor::buscarSuscriptorEmail($conn, $_POST['txt-email'])) {
				$resultado['email'] = true;
				if (preg_match("/^[a-z]+[ ]*$/i", $_POST['txt-nombre'])) {
					$resultado['nombre'] = true;
					if (preg_match("/^[a-z]+[ ]*$/i", $_POST['txt-apellido'])) {
						$resultado['apellido'] = true;
						if ($_POST['txt-telefono'] == '' or
							preg_match("/^[1-9][0-9]{3}-[0-9]{4}$/", $_POST['txt-telefono'])) {
							$resultado['telefono'] = true;
							if ($suscriptorId = Suscriptor::siguienteSuscriptorId($conn)) {
								$suscriptor = new Suscriptor($suscriptorId,
														$_POST['txt-nombre'],
														$_POST['txt-apellido'],
														$_POST['txt-email'],
														$_POST['txt-telefono']
													);
								if ($suscriptor->guardarSuscriptor($conn)) {
									$resultado['realizado'] = true;
									$resultado['msg'] = 'Suscriptor almacenado correctamente';
								} else {
									$resultado['msg'] = 'Falla al guardar el suscriptor';
								}
							}
						} else {
							$resultado['telefono'] = false;
						}
					} else {
						$resultado['msg'] = 'Solo un apellido';
					}
				} else {
					$resultado['msg'] = 'Solo un nombre';
				}
			} else {
				$resultado['msg'] = 'El email ya existe';
			}
		} else {
			$resultado['msg'] = 'El email no es correcto';
		}
	}

	echo json_encode($resultado);
?>