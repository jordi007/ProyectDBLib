<?php

	  include_once("class_pais.php");

	class Editorial{

		private $editorialId;
		private $pais;
		private $nombre;
		private $email;

		public function __construct($editorialId,
					$pais,
					$nombre,
					$email){
			$this->editorialId = $editorialId;
			$this->pais = $pais;
			$this->nombre = $nombre;
			$this->email = $email;
		}
		public function getEditorialId(){
			return $this->editorialId;
		}
		public function setEditorialId($editorialId){
			$this->editorialId = $editorialId;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function __toString(){
			return "EditorialId: " . $this->editorialId . 
				" Pais: " . $this->pais . 
				" Nombre: " . $this->nombre . 
				" Email: " . $this->email;
		}

		public function numeroLibros($conexion) {
			$sql = 'SELECT COUNT(E.EditorialId) NEditoriales
					FROM Editorial E
					LEFT JOIN Libro L ON E.EditorialId = L.MateriaId
					WHERE E.EditorialId = '. $this->editorialId
					.' GROUP BY E.EditorialId';

			$cursor = $conexion->ejecutarConsulta($sql); 

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					return $temp['NEditoriales'];	
				}
			} else {
				return false;
			}

			return 0;
		}

		static function listaEditoriales($conexion) {
			$sql = 'SELECT E.EditorialId, E.Nombre, E.Email, P.PaisId, P.Nombre NombrePais
					FROM Editorial E
					INNER JOIN Pais P ON E.PaisId = P.PaisId';

			$cursor = $conexion->ejecutarConsulta($sql); 

			$editoriales = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$editoriales[] = new Editorial(
						$temp['EditorialId'], 
						new Pais($temp['PaisId'], $temp['NombrePais']), 
						$temp['Nombre'], 
						$temp['Email']
					);
				}
			} else {
				return false;
			}

			return $editoriales;
		}
	}
?>