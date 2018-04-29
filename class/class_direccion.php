<?php

	class Direcccion{

		private $direccionId;
		private $indice;
		private $proveedorId;
		private $ciudadId;
		private $coloniaId;
		private $casa;
		private $referencia;

		public function __construct($direccionId,
					$indice,
					$proveedorId,
					$ciudadId,
					$coloniaId,
					$casa,
					$referencia){
			$this->direccionId = $direccionId;
			$this->indice = $indice;
			$this->proveedorId = $proveedorId;
			$this->ciudadId = $ciudadId;
			$this->coloniaId = $coloniaId;
			$this->casa = $casa;
			$this->referencia = $referencia;
		}
		public function getDireccionId(){
			return $this->direccionId;
		}
		public function setDireccionId($direccionId){
			$this->direccionId = $direccionId;
		}
		public function getIndice(){
			return $this->indice;
		}
		public function setIndice($indice){
			$this->indice = $indice;
		}
		public function getProveedorId(){
			return $this->proveedorId;
		}
		public function setProveedorId($proveedorId){
			$this->proveedorId = $proveedorId;
		}
		public function getCiudadId(){
			return $this->ciudadId;
		}
		public function setCiudadId($ciudadId){
			$this->ciudadId = $ciudadId;
		}
		public function getColoniaId(){
			return $this->coloniaId;
		}
		public function setColoniaId($coloniaId){
			$this->coloniaId = $coloniaId;
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
		public function __toString(){
			return "DireccionId: " . $this->direccionId . 
				" Indice: " . $this->indice . 
				" ProveedorId: " . $this->proveedorId . 
				" CiudadId: " . $this->ciudadId . 
				" ColoniaId: " . $this->coloniaId . 
				" Casa: " . $this->casa . 
				" Referencia: " . $this->referencia;
		}
	}
?>