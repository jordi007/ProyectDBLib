<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php 
		include 'class_conexion.php';

		$conn = new Conexion();

		if ($conn->getLink()) {
			echo "conexion exitosa";
		} else {
			echo "Fallo al intertar conectar";
		}
	?>
</body>
</html>