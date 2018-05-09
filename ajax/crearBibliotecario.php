<?php 
	include('../class/class_conexion.php');
	include('../class/class_bibliotecario.php');

	$resultado['realizado'] = false;
	$resultado['email'] = false;
	$resultado['nombre'] = false;
	$resultado['apellido'] = false;
	$resultado['telefono'] = false;
	$resultado['sueldo'] = false;
	$resultado['password'] = false;
	$resultado['root'] = false;
	$resultado['msg'] = "";

	if ($conn = new Conexion()) {
		if (filter_var($_POST['txt-email'], FILTER_VALIDATE_EMAIL)) {			
			if (!Bibliotecario::buscarSuscriptorEmail($conn, $_POST['txt-email'])) {
				$resultado['email'] = true;
				if (preg_match("/^[a-z]+[ ]*$/i", $_POST['txt-nombre'])) {
					$resultado['nombre'] = true;
					if (preg_match("/^[a-z]+[ ]*$/i", $_POST['txt-apellido'])) {
						$resultado['apellido'] = true;
						if (preg_match("/^[1-9][0-9]{3}-[0-9]{4}$/", $_POST['txt-telefono'])) {
							$resultado['telefono'] = true;
							if (preg_match("/^[0-9]*.[0-9]{2}$/", $_POST['txt-sueldo'])) {
								$resultado['sueldo'] = true;
								if ($_POST['txt-password1'] != '' 
									and $_POST['txt-password1'] == $_POST['txt-password2']) {
									$resultado['password'] = true;
									if ($_POST['txt-password3'] == 'asd.456') { 
										$resultado['root'] = true;
										if ($biblId = Bibliotecario::siguienteSuscriptorId($conn)) {
											$bibl = new Bibliotecario($biblId,
																	$_POST['txt-nombre'],
																	$_POST['txt-apellido'],
																	$_POST['txt-email'],
																	$_POST['txt-telefono'],
																	sha1($_POST['txt-password1']),
																	$_POST['txt-sueldo']		
																);

											if ($bibl->guardarSuscriptor($conn) 
												and $bibl->registrarBibliotecario($conn)) {
												$resultado['realizado'] = true;
												$resultado['msg'] = 'Suscriptor almacenado correctamente';
											} else {
												$resultado['msg'] = 'Falla al guardar el suscriptor';
											}
										}
									}
								}
							}
						}
					}
				}
			} 
		} 
	}

	echo json_encode($resultado);
?>