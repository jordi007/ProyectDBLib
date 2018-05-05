<?php

	  include_once("class_libros.php");

	class Ejemplar extends Libro{

		private $indice;
		private $proveedor;
		private $estado;
		private $observacion;
		private $fechaAdquisicion;
		private $precio;

		public function __construct($libroId,
					$editorial,
					$materia,
					$codigo,
					$titulo,
					$edicion,
					$isbn,
					$anio,
					$descipcion,
					$urlimg,
					$autor,
					$indice,
					$proveedor,
					$estado,
					$observacion,
					$fechaAdquisicion,
					$precio){
			parent::__construct($libroId,$editorial,$materia,$codigo,$titulo,$edicion,$isbn,$anio,$descipcion,$urlimg,$autor);
			$this->indice = $indice;
			$this->proveedor = $proveedor;
			$this->estado = $estado;
			$this->observacion = $observacion;
			$this->fechaAdquisicion = $fechaAdquisicion;
			$this->precio = $precio;
		}
		public function getIndice(){
			return $this->indice;
		}
		public function setIndice($indice){
			$this->indice = $indice;
		}
		public function getproveedor(){
			return $this->proveedor;
		}
		public function setproveedor($proveedor){
			$this->proveedor = $proveedor;
		}
		public function getestado(){
			return $this->estado;
		}
		public function setestado($estado){
			$this->estado = $estado;
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
			return parent::__toString() .  
				" Indice: " . $this->indice . 
				" proveedor: " . $this->proveedor . 
				" estado: " . $this->estado . 
				" Observacion: " . $this->observacion . 
				" FechaAdquisicion: " . $this->fechaAdquisicion . 
				" Precio: " . $this->precio;
		}
	}
?>