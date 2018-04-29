<?php

	class Prestamo{

		private $prestamoId;
		private $libroId;
		private $indice;
		private $bibliotecarioId;
		private $suscriptorId;
		private $fechaSalida;
		private $fechaEntrega;
		private $entregago;
		private $multa;

		public function __construct($prestamoId,
					$libroId,
					$indice,
					$bibliotecarioId,
					$suscriptorId,
					$fechaSalida,
					$fechaEntrega,
					$entregago,
					$multa){
			$this->prestamoId = $prestamoId;
			$this->libroId = $libroId;
			$this->indice = $indice;
			$this->bibliotecarioId = $bibliotecarioId;
			$this->suscriptorId = $suscriptorId;
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
		public function getBibliotecarioId(){
			return $this->bibliotecarioId;
		}
		public function setBibliotecarioId($bibliotecarioId){
			$this->bibliotecarioId = $bibliotecarioId;
		}
		public function getSuscriptorId(){
			return $this->suscriptorId;
		}
		public function setSuscriptorId($suscriptorId){
			$this->suscriptorId = $suscriptorId;
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
				" LibroId: " . $this->libroId . 
				" Indice: " . $this->indice . 
				" BibliotecarioId: " . $this->bibliotecarioId . 
				" SuscriptorId: " . $this->suscriptorId . 
				" FechaSalida: " . $this->fechaSalida . 
				" FechaEntrega: " . $this->fechaEntrega . 
				" Entregago: " . $this->entregago . 
				" Multa: " . $this->multa;
		}
	}
?>