<!DOCTYPE html>
<html>
<head>
	<title>pruebas</title>
</head>
<body>
<?php 
/*$autorId;
$nombre;
$apellido;
$seudonimo;
$fechanac;
$pais;*/
/* INSTANCIACION DE UN AUOTR DE FORMA EXITOSA */
	include_once("class/class_autor.php");
	$autor = new Autor(1,'Marvin','Ponce','La vaca intelectual','6/6/6',new Pais(1,'Honduras'));
	echo "este es el autor: ".$autor;
	echo "<br>";
	echo "Nombre: ".$autor->getNombre();
	echo "<br>";
	echo "Nombre: ".$autor->getPais()->getNombre();
	echo "<br>";
	echo "Nombre: ".$autor->getSeudonimo();
	echo "<br>";
	echo "<br>";

	/* INSTANCIACION DE UNA EDITORIAL */
	include_once("class/class_editorial.php");
	$editorial = new Editorial(1,new Pais(1,'Honduras'),'Printing','printinghn@gmail.com');
	echo "esta es la editorial: ".$editorial;
	echo "<br>--------------------otra forma de instanciar------------------";
	echo "<br>";
	$pa = new Pais(2,'Guate');
	$editorial = new Editorial(1,$pa,'Printing','printinghn@gmail.com');
	echo "esta es la editorial: ".$editorial;
	echo "<br>--__--".$editorial->getPais()->getNombre();
	echo "<br>";
	echo "pais de la editorial: ".$editorial->getPais();
	echo "<br>";
	echo "<br>";

	/* INSTANCIAR DIRECCION */
	include_once("class/class_direccion.php");
	$direccion = new Direccion(1,'666','A la par de la casa loca','la 3 de miedo','Comayawela');
	echo "La direccio: ".$direccion;
	echo "<br>";
	echo "la referencia: ".$direccion->getReferencia();
	echo "<br>";
	echo "<br>";

	/* INSTANCIACION DE PROVEEDOR */
	include_once("class/class_proveedor.php");
	$proveedor = new Proveedor(1,'jetstereo','22222222','jetsteroe@hn.com',new Direccion(1,'666','A la par de la casa loca','la 3 de miedo','Comayawela'));
	echo "El proveedor es: ".$proveedor;
	echo "<br>";
	echo "El telefono del proveedor: ".$proveedor->getTelefono();
	echo "<br>";
	echo "El telefono del proveedor: ".$proveedor->getDireccion()->getCiudad();

	/*  */

?>
</body>
</html>