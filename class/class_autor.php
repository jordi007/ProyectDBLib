<?php

	include_once("class_pais.php");
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
			$this->pais =  $pais;
			//$this->pais = new Pais();
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

		public function numeroLibros($conexion) {
			$sql = 'SELECT COUNT(A.AutorId) NLibros
					FROM Autor A
					LEFT JOIN LibroxAutor LA ON A.AutorId = LA.AutorId
					WHERE A.AutorId = '.$this->autorId
					.' GROUP BY A.AutorId';

			$cursor = $conexion->ejecutarConsulta($sql); 

			$numLibros = 0;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					return $temp['NLibros'];
				}
			} else {
				return false;
			}

			return $numeroLibros;
		}

		static function buscarAutorLibro($conexion, $codigo) {
			$sql = "SELECT A.AutorId, A.Nombre, A.Apellido, A.Seudonimo, A.FechaNac, P.PaisId, P.Nombre NombrePais
					FROM Libro L
					INNER JOIN LibroxAutor LA ON L.LibroId = LA.LibroId
					INNER JOIN Autor A ON A.AutorId = LA.AutorId
					INNER JOIN Pais P ON A.PaisId = P.PaisId
					WHERE L.Codigo = '".$codigo."'";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$autores = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$autores[] = new Autor(
							$temp['AutorId'],
							$temp['Nombre'],
							$temp['Apellido'],
							$temp['Seudonimo'],
							$temp['FechaNac'],
							new Pais($temp['PaisId'], $temp['NombrePais'])
						);;
				}
			} else {
				return false;
			}

			return $autores;
		}

		static function listaDeAutores($conexion) {
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
		//-------------------------------------
		static function listaDeAutoresLibro($conexion) {
			$sql = "SELECT L.Codigo, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, M.Nombre
				FROM Libro L
				INNER JOIN Materia M 
				ON M.MateriaId = L.MateriaId
				WHERE M.Codigo = 'if'";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$resultado = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
				$resultado[] = $temp;
				//print_r($resultado);
				}
			} else {
				return false;
			}

			return $resultado;
		}
	}
?>