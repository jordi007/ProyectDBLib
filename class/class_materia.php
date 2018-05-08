<?php
include_once("class_autor.php");
include_once("class_materia.php");

	class Materia{

		private $materiaId;
		private $nombre;
		private $codigo;

		public function __construct($materiaId,
					$nombre,
					$codigo){
			$this->materiaId = $materiaId;
			$this->nombre = $nombre;
			$this->codigo = $codigo;
		}
		public function getmateriaId(){
			return $this->materiaId;
		}
		public function setmateriaId($materiaId){
			$this->materiaId = $materiaId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getcodigo(){
			return $this->codigo;
		}
		public function setcodigo($codigo){
			$this->codigo = $codigo;
		}
		public function __toString(){
			return "materiaId: " . $this->materiaId . 
				" Nombre: " . $this->nombre . 
				" codigo: " . $this->codigo;
		}

		public function numeroLibros($conexion) {
			$sql = 'SELECT COUNT(M.MateriaId) NLibros
					FROM Materia M
					INNER JOIN Libro L ON M.MateriaId = L.MateriaId
					WHERE M.MateriaId = '. $this->materiaId
					.' GROUP BY M.MateriaId';

			$cursor = $conexion->ejecutarConsulta($sql); 

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					return $temp['NLibros'];	
				}
			} else {
				return false;
			}

			return 0;
		}

		static function listaLibros($conexion) {
			$sql = 'SELECT M.MateriaId, M.Nombre, M.codigo
					FROM Materia M';

			$cursor = $conexion->ejecutarConsulta($sql); 

			$materias = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$materias[] = new Materia(
						$temp['MateriaId'], 
						$temp['Nombre'], 
						$temp['codigo']
					);
				}
			} else {
				return false;
			}

			return $materias;
		}

		//----------
		static function listaDelAutores($conexion) {
			$sql = "SELECT L.Codigo, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, M.Nombre
				FROM Libro L
				INNER JOIN Materia M
				ON L.MateriaId = M.MateriaId
				WHERE M.Codigo = 'if'";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$libros = array();
			if ($cursor) {

				while ($temp = $conexion->obtenerFila($cursor)) {

					$libros[] = new Materia(
						$temp['Codigo'], 
						$temp['Titulo'], 
						$temp['Edicion'],
						$temp['ISBN'], 
						$temp['Anio'],
						$temp['Descripcion']);
				}
			} else {
				return false;
			}

			return $libros;
		}
	}
?>