<?php

	  include_once("class_bibliotecario.php");
	  include_once("class_suscriptor.php");
	  include_once("class_ejemplar.php");

	class Prestamo{

		private $prestamoId;
		private $ejemplar;
		private $indice;
		private $bibliotecario;
		private $suscriptor;
		private $fechaSalida;
		private $fechaEntrega;
		private $entregago;
		private $multa;

		public function __construct($prestamoId,
					$ejemplar,
					$indice,
					$bibliotecario,
					$suscriptor,
					$fechaSalida,
					$fechaEntrega,
					$entregago,
					$multa){
			$this->prestamoId = $prestamoId;
			$this->ejemplar = $ejemplar;
			$this->indice = $indice;
			$this->bibliotecario = $bibliotecario;
			$this->suscriptor = $suscriptor;
			$this->fechaSalida = $fechaSalida;
			$this->fechaEntrega = $fechaEntrega;
			$this->entregago = $entregago;
			$this->multa = $multa;
		}
		public function getPrestamoId(){
			return $this->prestamoId;
		}
		public function setPrestamoId($prestamoId){
			$this->prestamoId = $prestamoId;
		}
		public function getejemplar(){
			return $this->ejemplar;
		}
		public function setejemplar($ejemplar){
			$this->ejemplar = $ejemplar;
		}
		public function getIndice(){
			return $this->indice;
		}
		public function setIndice($indice){
			$this->indice = $indice;
		}
		public function getbibliotecario(){
			return $this->bibliotecario;
		}
		public function setbibliotecario($bibliotecario){
			$this->bibliotecario = $bibliotecario;
		}
		public function getsuscriptor(){
			return $this->suscriptor;
		}
		public function setsuscriptor($suscriptor){
			$this->suscriptor = $suscriptor;
		}
		public function getFechaSalida(){
			return $this->fechaSalida;
		}
		public function setFechaSalida($fechaSalida){
			$this->fechaSalida = $fechaSalida;
		}
		public function getFechaEntrega(){
			return $this->fechaEntrega;
		}
		public function setFechaEntrega($fechaEntrega){
			$this->fechaEntrega = $fechaEntrega;
		}
		public function getEntregago(){
			return $this->entregago;
		}
		public function setEntregago($entregago){
			$this->entregago = $entregago;
		}
		public function getMulta(){
			return $this->multa;
		}
		public function setMulta($multa){
			$this->multa = $multa;
		}
		public function __toString(){
			return "PrestamoId: " . $this->prestamoId . 
				" ejemplar: " . $this->ejemplar . 
				" Indice: " . $this->indice . 
				" bibliotecario: " . $this->bibliotecario . 
				" suscriptor: " . $this->suscriptor . 
				" FechaSalida: " . $this->fechaSalida . 
				" FechaEntrega: " . $this->fechaEntrega . 
				" Entregago: " . $this->entregago . 
				" Multa: " . $this->multa;
		}
	}
?>