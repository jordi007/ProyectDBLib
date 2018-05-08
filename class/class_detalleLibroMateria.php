<?php

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
		public function getMateriaId(){
			return $this->materiaId;
		}
		public function setMateriaId($materiaId){
			$this->materiaId = $materiaId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		public function __toString(){
			return "MateriaId: " . $this->materiaId . 
				" Nombre: " . $this->nombre . 
				" Codigo: " . $this->codigo;
		}

		
	}
?>