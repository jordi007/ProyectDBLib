<?php

	class Bibliotecario{

		private $suscriptorId;
		private $contrasenia;
		private $salario;

		public function __construct($suscriptorId,
					$contrasenia,
					$salario){
			$this->suscriptorId = $suscriptorId;
			$this->contrasenia = $contrasenia;
			$this->salario = $salario;
		}
		public function getSuscriptorId(){
			return $this->suscriptorId;
		}
		public function setSuscriptorId($suscriptorId){
			$this->suscriptorId = $suscriptorId;
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
			return "SuscriptorId: " . $this->suscriptorId . 
				" Contrasenia: " . $this->contrasenia . 
				" Salario: " . $this->salario;
		}
	}
?>