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
	echo "<br>";
	echo "<br>";

	/* INSTANCIA DE SUSCRPTOR */
	include_once("class/class_suscriptor.php");
	$suscriptor = new Suscriptor(1,'Matusalen','Al Hazar','bomba@kabum.com','954516188112');
	echo "El suscriptor es: ".$suscriptor;
	echo "<br>";
	echo "Apellido del suscriptor: ".$suscriptor->getApellido();
	echo "<br>";
	echo "<br>";
	
	/* INSTANCIA DE BIBLIOTECARIO */
	include_once("class/class_bibliotecario.php");
	$bibliotecario = new Bibliotecario(4,'kuasimodo','notreDam','joroba@booling.com','476841',1,'asd.456',23000);
	echo "Este es el bibliotecario: ". $bibliotecario;
	echo "<br>";
	echo "salario del bibliotecario: ". $bibliotecario->getSalario();
	echo "<br>";
	echo "<br>";
	/* INSTANCIACION DE LIBROS */
	include_once("class/class_libros.php");
	$libros = new Libro(1,new Editorial(1,$pa,'Printing','printinghn@gmail.com'),'ingles','IN-0001-02','Inglis A','3','isbn','2016','Todo esta en ingles','url de la imagen',new Autor(1,'Marvin','Ponce','La vaca intelectual','6/6/6',new Pais(1,'Honduras')));
	echo "Este es un libro: ". $libros;
	echo "<br>";
	echo "datos especificos: " . $libros->getEditorial()->getNombre() ." Seudonimo del autor:  ". $libros->getAutor()->getSeudonimo();
	echo "<br>";
	echo "<br>";

	/* INSTANCIACION DE EJEMPLARES */
	include_once("class/class_ejemplar.php");
	$ejemplar = new Ejemplar(1,new Editorial(1,$pa,'Printing','printinghn@gmail.com'),'ingles','qwrer','Ingles whats','4 edi','isbn','2018','esta buen el libro','url imagen',new Autor(1,'Marvin','Ponce','La vaca intelectual','6/6/6',new Pais(1,'Honduras')),'indice',new Proveedor(1,'jetstereo','22222222','jetsteroe@hn.com',new Direccion(1,'666','A la par de la casa loca','la 3 de miedo','Comayawela')),'estado','observacion por si no sirve','fecha fechaAdquisicion','precio en pisto');
	echo "Ejemplar de libro: " . $ejemplar;
	echo "<br>";
	echo "<br>";
	
	/* INSTANCIACION DE PRESTAMO  */
	include_once("class/class_prestamo.php");
	$prestamo = new Prestamo(1,new Ejemplar(1,new Editorial(1,$pa,'Printing','printinghn@gmail.com'),'ingles','qwrer','Ingles whats','4 edi','isbn','2018','esta buen el libro','url imagen',new Autor(1,'Marvin','Ponce','La vaca intelectual','6/6/6',new Pais(1,'Honduras')),'indice',new Proveedor(1,'jetstereo','22222222','jetsteroe@hn.com',new Direccion(1,'666','A la par de la casa loca','la 3 de miedo','Comayawela')),'estado','observacion por si no sirve','fecha fechaAdquisicion','precio en pisto'),'indice',new Bibliotecario(4,'kuasimodo','notreDam','joroba@booling.com','476841',1,'asd.456',23000),new Suscriptor(1,'Matusalen','Al Hazar','bomba@kabum.com','954516188112'),'4/57/758','12/58/55','45/98/9','algo');
	echo "Este es un prestamo: ". $prestamo;
	echo "<br>";
	/*$prestamoId;
$ejemplar;
$indice;
$bibliotecario;
$suscriptor;
$fechaSalida;
$fechaEntrega;
$entregago;
$multa;*/

?>
</body>
</html>