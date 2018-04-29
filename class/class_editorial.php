<?php

	class Editorial{

		private $editorialId;
		private $paisId;
		private $nombre;
		private $email;

		public function __construct($editorialId,
					$paisId,
					$nombre,
					$email){
			$this->editorialId = $editorialId;
			$this->paisId = $paisId;
			$this->nombre = $nombre;
			$this->email = $email;
		}
		public function getEditorialId(){
			return $this->editorialId;
		}
		public function setEditorialId($editorialId){
			$this->editorialId = $editorialId;
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
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function __toString(){
			return "EditorialId: " . $this->editorialId . 
				" PaisId: " . $this->paisId . 
				" Nombre: " . $this->nombre . 
				" Email: " . $this->email;
		}
	}
?>