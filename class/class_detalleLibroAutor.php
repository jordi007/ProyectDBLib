<?php
include_once("class_libros.php");
include_once("class_autor.php");
//include_once("class_libroxAutor.php");

	class Autor{

		private $autorId;
		private $nombre;
		private $apellido;
		private $seudonimo;
		private $fechanac;
		private $pais;

		public function __construct($autorId,
					$nombre,
					$apellido,
					$seudonimo,
					$fechanac,
					$pais){
			$this->autorId = $autorId;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->seudonimo = $seudonimo;
			$this->fechanac = $fechanac;
			$this->pais = $pais;
		}
		public function getAutorId(){
			return $this->autorId;
		}
		public function setAutorId($autorId){
			$this->autorId = $autorId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getSeudonimo(){
			return $this->seudonimo;
		}
		public function setSeudonimo($seudonimo){
			$this->seudonimo = $seudonimo;
		}
		public function getFechanac(){
			return $this->fechanac;
		}
		public function setFechanac($fechanac){
			$this->fechanac = $fechanac;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function __toString(){
			return "AutorId: " . $this->autorId . 
				" Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Seudonimo: " . $this->seudonimo . 
				" Fechanac: " . $this->fechanac . 
				" Pais: " . $this->pais;
		}
		
static function listaLibros($conexion) {
			$sql = "SELECT A.AutorId, A.Nombre, A.Apellido, A.Seudonimo, 
						A.FechaNac, P.PaisId, P.Nombre AS NombrePais
					FROM Autor A 
					INNER JOIN Pais P ON A.PaisId = P.PaisId";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$resultado = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
				$resultado[] = new Autor(
							$temp['AutorId'],
							$temp['Nombre'],
							$temp['Apellido'],
							$temp['Seudonimo'],
							$temp['FechaNac'],
							new Pais($temp['PaisId'], $temp['NombrePais'])
						);
				}
			} else {
				return false;
			}

			return $resultado;
		}
	}
?>