<?php

	class LibroxAutor{

		private $autorId;
		private $Indice;
		private $libroId;

		public function __construct($autorId,
					$Indice,
					$libroId){
			$this->autorId = $autorId;
			$this->Indice = $Indice;
			$this->libroId = $libroId;
		}
		public function getAutorId(){
			return $this->autorId;
		}
		public function setAutorId($autorId){
			$this->autorId = $autorId;
		}
		public function getIndice(){
			return $this->Indice;
		}
		public function setIndice($Indice){
			$this->Indice = $Indice;
		}
		public function getLibroId(){
			return $this->libroId;
		}
		public function setLibroId($libroId){
			$this->libroId = $libroId;
		}
		public function __toString(){
			return "AutorId: " . $this->autorId . 
				" Indice: " . $this->Indice . 
				" LibroId: " . $this->libroId;
		}
	}
?>