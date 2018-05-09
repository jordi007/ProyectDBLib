<?php 
	include_once('../class/class_conexion.php');
	include_once('../class/class_bibliotecario.php');

	$resultado['realizado'] = false;
	$resultado['email'] = false;
	$resultado['password'] = false;
	$resultado['msg'] = '';

	if ($conn = new Conexion()) {
		if (filter_var($_POST['txt-email'], FILTER_VALIDATE_EMAIL)) {
			if ($bibl = Bibliotecario::buscarBibliotecarioEmail($conn, $_POST['txt-email'])) {
				$resultado['email'] = true;
				if (sha1($_POST['txt-password']) == $bibl->getContrasenia()) {
					$resultado['msg'] = 'Secion iniciada correctamente';
					$resultado['realizado'] = true;
					$resultado['password'] = true;
					
					session_start();
					$_SESSION['id'] = $bibl->getSuscriptorId();
					$_SESSION['email'] = $bibl->getEmail();
					$_SESSION['nombre'] = $bibl->getNombre();
					$_SESSION['apellido'] = $bibl->getApellido();
					$_SESSION['password'] = $bibl->getContrasenia();

				} else {
					$resultado['msg'] = 'El password no es valido';
				}
			} else {
				$resultado['msg'] = 'El bibliotecario no existe';
			}
		} else {
			$resultado['msg'] = 'Escriba bien el Email';
		}
	}

	echo json_encode($resultado);
?>