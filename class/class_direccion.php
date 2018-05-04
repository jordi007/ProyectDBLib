<?php

	class Direccion{

		private $direccionId;
		private $casa;
		private $referencia;
		private $colonia;
		private $ciudad;

		public function __construct($direccionId,
					$casa,
					$referencia,
					$colonia,
					$ciudad){
			$this->direccionId = $direccionId;
			$this->casa = $casa;
			$this->referencia = $referencia;
			$this->colonia = $colonia;
			$this->ciudad = $ciudad;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getCasa(){
			return $this->casa;
		}
		public function setCasa($casa){
			$this->casa = $casa;
		}
		public function getReferencia(){
			return $this->referencia;
		}
		public function setReferencia($referencia){
			$this->referencia = $referencia;
		}
		public function getColonia(){
			return $this->colonia;
		}
		public function setColonia($colonia){
			$this->colonia = $colonia;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function __toString(){
			return "DireccionId: " . $this->direccionId .  
				" Casa: " . $this->casa . 
				" Referencia: " . $this->referencia .
				" Ciudad: " . $this->ciudad . 
				" Colonia: " . $this->colonia;
		}
	}
?>