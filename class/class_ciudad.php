<?php

	class Ciudad{

		private $ciudadId;
		private $nombre;

		public function __construct($ciudadId,
					$nombre){
			$this->ciudadId = $ciudadId;
			$this->nombre = $nombre;
		}
		public function getCiudadId(){
			return $this->ciudadId;
		}
		public function setCiudadId($ciudadId){
			$this->ciudadId = $ciudadId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function __toString(){
			return "CiudadId: " . $this->ciudadId . 
				" Nombre: " . $this->nombre;
		}
	}
?>