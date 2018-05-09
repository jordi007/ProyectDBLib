<?php

	include_once("class_suscriptor.php");

	class Bibliotecario extends Suscriptor {

		private $contrasenia;
		private $salario;

		public function __construct($suscriptorId,
					$nombre,
					$apellido,
					$email,
					$telefono,
					$contrasenia,
					$salario){
			parent::__construct($suscriptorId,$nombre,$apellido,$email,$telefono);
			$this->contrasenia = $contrasenia;
			$this->salario = $salario;
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

		static function buscarBibliotecarioEmail($conexion, $email) {
			$sql = "SELECT B.SuscriptorId, S.Nombre, S.Apellido, S.Email, 
					S.Telefono, B.Contrasenia, B.Salario
				FROM Suscriptor S
				INNER JOIN Bibliotecario B ON S.SuscriptorId = B.SuscriptorId
				WHERE S.Email = '".$email."'";
			
			$cursor = $conexion->ejecutarConsulta($sql); 

			$suscriptor = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$suscriptor = new Bibliotecario (
						$temp['SuscriptorId'],
						$temp['Nombre'], 
						$temp['Apellido'],
						$temp['Email'],
						$temp['Telefono'],
						$temp['Contrasenia'],
						$temp['Salario']
					);
				}
			}

			return $suscriptor;
		}
	}
?>