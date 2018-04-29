<?php

	class Colonia{

		private $coloniaId;
		private $ciudadId;
		private $nombre;

		public function __construct($coloniaId,
					$ciudadId,
					$nombre){
			$this->coloniaId = $coloniaId;
			$this->ciudadId = $ciudadId;
			$this->nombre = $nombre;
		}
		public function getColoniaId(){
			return $this->coloniaId;
		}
		public function setColoniaId($coloniaId){
			$this->coloniaId = $coloniaId;
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
			return "ColoniaId: " . $this->coloniaId . 
				" CiudadId: " . $this->ciudadId . 
				" Nombre: " . $this->nombre;
		}
	}
?>