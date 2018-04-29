<?php

	class Materia{

		private $materiaId;
		private $materia;

		public function __construct($materiaId,
					$materia){
			$this->materiaId = $materiaId;
			$this->materia = $materia;
		}
		public function getMateriaId(){
			return $this->materiaId;
		}
		public function setMateriaId($materiaId){
			$this->materiaId = $materiaId;
		}
		public function getMateria(){
			return $this->materia;
		}
		public function setMateria($materia){
			$this->materia = $materia;
		}
		public function __toString(){
			return "MateriaId: " . $this->materiaId . 
				" Materia: " . $this->materia;
		}
	}
?>