<?php

	class Ejemplar{

		private $libroId;
		private $indice;
		private $proveedorId;
		private $estadoId;
		private $observacion;
		private $fechaAdquisicion;
		private $precio;

		public function __construct($libroId,
					$indice,
					$proveedorId,
					$estadoId,
					$observacion,
					$fechaAdquisicion,
					$precio){
			$this->libroId = $libroId;
			$this->indice = $indice;
			$this->proveedorId = $proveedorId;
			$this->estadoId = $estadoId;
			$this->observacion = $observacion;
			$this->fechaAdquisicion = $fechaAdquisicion;
			$this->precio = $precio;
		}
		public function getLibroId(){
			return $this->libroId;
		}
		public function setLibroId($libroId){
			$this->libroId = $libroId;
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
		public function getEstadoId(){
			return $this->estadoId;
		}
		public function setEstadoId($estadoId){
			$this->estadoId = $estadoId;
		}
		public function getObservacion(){
			return $this->observacion;
		}
		public function setObservacion($observacion){
			$this->observacion = $observacion;
		}
		public function getFechaAdquisicion(){
			return $this->fechaAdquisicion;
		}
		public function setFechaAdquisicion($fechaAdquisicion){
			$this->fechaAdquisicion = $fechaAdquisicion;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		public function __toString(){
			return "LibroId: " . $this->libroId . 
				" Indice: " . $this->indice . 
				" ProveedorId: " . $this->proveedorId . 
				" EstadoId: " . $this->estadoId . 
				" Observacion: " . $this->observacion . 
				" FechaAdquisicion: " . $this->fechaAdquisicion . 
				" Precio: " . $this->precio;
		}
	}
?>