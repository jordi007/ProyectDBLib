<?php

	class Pais{

		private $paisId;
		private $nombre;

		public function __construct($paisId,
					$nombre){
			$this->paisId = $paisId;
			$this->nombre = $nombre;
		}
		public function getPaisId(){
			return $this->paisId;
		}
		public function setPaisId($paisId){
			$this->paisId = $paisId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function __toString(){
			return "PaisId: " . $this->paisId . 
				" Nombre: " . $this->nombre;
		}
	}
?>