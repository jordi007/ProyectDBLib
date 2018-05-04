<?php

	  include_once("class_pais.php");

	class Autor{

		private $autorId;
		private $nombre;
		private $apellido;
		private $seudonimo;
		private $fechanac;
		private $pais;

		public function __construct($autorId,
					$nombre,
					$apellido,
					$seudonimo,
					$fechanac,
					$pais){
			$this->autorId = $autorId;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->seudonimo = $seudonimo;
			$this->fechanac = $fechanac;
			$this->pais =  $pais;
			//$this->pais = new Pais();
		}
		public function getAutorId(){
			return $this->autorId;
		}
		public function setAutorId($autorId){
			$this->autorId = $autorId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getSeudonimo(){
			return $this->seudonimo;
		}
		public function setSeudonimo($seudonimo){
			$this->seudonimo = $seudonimo;
		}
		public function getFechanac(){
			return $this->fechanac;
		}
		public function setFechanac($fechanac){
			$this->fechanac = $fechanac;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function __toString(){
			return "AutorId: " . $this->autorId . 
				" Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Seudonimo: " . $this->seudonimo . 
				" Fechanac: " . $this->fechanac . 
				" Pais: " . $this->pais;
		}
	}
?>