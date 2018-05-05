<?php

	  include_once("class_suscriptor.php");

	class Bibliotecario extends Suscriptor {

		private $bibliotecarioId;
		private $contrasenia;
		private $salario;

				public function __construct($suscriptorId,
					$nombre,
					$apellido,
					$email,
					$telefono,
					$bibliotecarioId,
					$contrasenia,
					$salario){
			parent::__construct($suscriptorId,$nombre,$apellido,$email,$telefono);
			$this->bibliotecarioId = $bibliotecarioId;
			$this->contrasenia = $contrasenia;
			$this->salario = $salario;
		}
		public function getBibliotecarioId(){
			return $this->bibliotecarioId;
		}
		public function setBibliotecarioId($bibliotecarioId){
			$this->bibliotecarioId = $bibliotecarioId;
		}
		public function getContrasenia(){
			return $this->contrasenia;
		}
		public function setContrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}
		public function getSalario(){
			return $this->salario;
		}
		public function setSalario($salario){
			$this->salario = $salario;
		}
		public function __toString(){
			return parent::__toString() . 
				"BibliotecarioId: " . $this->bibliotecarioId . 
				" Contrasenia: " . $this->contrasenia . 
				" Salario: " . $this->salario;
		}
	}
?>