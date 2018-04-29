<?php

	class Proveedor{

		private $proveedorId;
		private $nombre;
		private $telefono;
		private $email;

		public function __construct($proveedorId,
					$nombre,
					$telefono,
					$email){
			$this->proveedorId = $proveedorId;
			$this->nombre = $nombre;
			$this->telefono = $telefono;
			$this->email = $email;
		}
		public function getProveedorId(){
			return $this->proveedorId;
		}
		public function setProveedorId($proveedorId){
			$this->proveedorId = $proveedorId;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function __toString(){
			return "ProveedorId: " . $this->proveedorId . 
				" Nombre: " . $this->nombre . 
				" Telefono: " . $this->telefono . 
				" Email: " . $this->email;
		}
	}
?>