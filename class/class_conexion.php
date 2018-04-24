<?php
	/**
	* Conexion: permite crear conexiones de bases de datos con ODBC
	*/
	class Conexion 
	{
		private $dsn = 'SQLServer';
		private $usuario = 'root';
		private $contrasena = 'asd.456';
		private $baseDatos = 'BibliotecaDB';
		private $link;

		function __construct(argument) {
			$this->link = odbc_connect(
				"Dsn=".$this->dsn.";Database=".$this->baseDatos,
				$usuario,
				$contrasena
			);	
		}

		public function ejecutarConsulta($sql) {
			return odbc_exec($this->link, $sql);
		}

		public function obtenerFila($resultado)	{
			return odbc_fetch_array($resultado);
		}

		public function numeroRegistros($resultado) {
			return odbc_num_rows($resultado);
		}

		public function getLink() {
			return $getLink;
		}
	}
?>