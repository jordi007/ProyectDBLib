<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php 
		include 'class_conexion.php';

		$conn = new Conexion();

		/*if ($conn->getLink()) {
			echo "conexion exitosa<br>";
			$cursor = $conn->ejecutarConsulta("SELECT * FROM Suscriptor");
			while ($temp = $conn->obtenerFila($cursor)) {
				echo utf8_encode($temp['Nombre']." ".$temp['Apellido']).'<br>';
			}
		} else {
			echo "Fallo al intertar conectar";
		}*/
	?>
	<table class="table table-hover">
  		<thead>
  			<tr>
  				<th>Nombre</th>
  				<th>Apellido</th>
  			</tr>
  		</thead>
  		<tbody>
   			<?php
  				if ($conn->getLink()) {
					echo "conexion exitosa<br>";
					$cursor = $conn->ejecutarConsulta("SELECT * FROM Suscriptor");
					while ($temp = $conn->obtenerFila($cursor)) {
						echo '<tr><td>'.utf8_encode($temp['Nombre']).'</td>'.
							'<td>'.utf8_encode($temp['Apellido']).'</td></tr>';
					}
				}
  			?>
  		</tbody>
	</table>
</body>
</html>