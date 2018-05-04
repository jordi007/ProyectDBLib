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
	}
?>