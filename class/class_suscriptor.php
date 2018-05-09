<?php

	class Suscriptor{

		private $suscriptorId;
		private $nombre;
		private $apellido;
		private $email;
		private $telefono;

		public function __construct($suscriptorId,
					$nombre,
					$apellido,
					$email,
					$telefono){
			$this->suscriptorId = $suscriptorId;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->email = $email;
			$this->telefono = $telefono;

		}
		public function getSuscriptorId(){
			return $this->suscriptorId;
		}
		public function setSuscriptorId($suscriptorId){
			$this->suscriptorId = $suscriptorId;
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
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function __toString(){
			return "SuscriptorId: " . $this->suscriptorId . 
				" Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Email: " . $this->email . 
				" Telefono: " . $this->telefono;
		}

		public function guardarSuscriptor($conexion) {
			$sql = "INSERT INTO Suscriptor 
					VALUES (".$this->suscriptorId.", 
							'".$this->nombre."',
							'".$this->apellido."', 
							'".$this->email."', 
							".(($this->telefono == '') ? "NULL" : "'".$this->telefono."'").")";
			
			if ($conexion->ejecutarConsulta($sql)) {
				return true;
			}
			return false;
		}

		static function siguienteSuscriptorId($conexion) {
			$sql = 'SELECT IIF (MAX(SuscriptorId) IS NULL, 1, MAX(SuscriptorId) + 1) SuscriptorId
					FROM Suscriptor';

			$cursor = $conexion->ejecutarConsulta($sql); 

			$SuscriptorId = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$SuscriptorId = $temp['SuscriptorId'];
				}
			}

			return $SuscriptorId;
		}

		static function buscarSuscriptorEmail($conexion, $email) {
			$sql = "SELECT SuscriptorId, Nombre, Apellido, Email, Telefono
					FROM Suscriptor
					WHERE Email = '".$email."'";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$suscriptor = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$suscriptor = new Suscriptor(
						$temp['SuscriptorId'], 
						$temp['Nombre'], 
						$temp['Apellido'],
						$temp['Email'],
						$temp['Telefono']
					);
				}
			}

			return $suscriptor;
		}

		
		static function listaDeSuscriptores($conexion) {
			$sql = "SELECT SuscriptorId,Nombre, Apellido, Email, Telefono
					FROM Suscriptor";

			$cursor = $conexion->ejecutarConsulta($sql); 
			$suscriptores = array();
			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {	
					$suscriptores[] = new Suscriptor(
						$temp['SuscriptorId'], 
						$temp['Nombre'], 
						$temp['Apellido'], 
						$temp['Email'],
						$temp['Telefono']);
				}
			} else {
				return false;
			}

			return $suscriptores;
		}

	}
?>