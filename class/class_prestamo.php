<?php

	  include_once("class_bibliotecario.php");
	  include_once("class_suscriptor.php");
	  include_once("class_ejemplar.php");

	class Prestamo{

		private $prestamoId;
		private $ejemplar;
		private $bibliotecario;
		private $suscriptor;
		private $fechaSalida;
		private $fechaEntrega;
		private $entregago;
		private $multa;

		public function __construct($prestamoId,
					$ejemplar,
					$bibliotecario,
					$suscriptor,
					$fechaSalida,
					$fechaEntrega,
					$entregago,
					$multa){
			$this->prestamoId = $prestamoId;
			$this->ejemplar = $ejemplar;
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
		public function getEjemplar(){
			return $this->ejemplar;
		}
		public function setEjemplar($ejemplar){
			$this->ejemplar = $ejemplar;
		}
		public function getBibliotecario(){
			return $this->bibliotecario;
		}
		public function setBibliotecario($bibliotecario){
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
				" bibliotecario: " . $this->bibliotecario . 
				" suscriptor: " . $this->suscriptor . 
				" FechaSalida: " . $this->fechaSalida . 
				" FechaEntrega: " . $this->fechaEntrega . 
				" Entregago: " . $this->entregago . 
				" Multa: " . $this->multa;
		}

		static function siguientePrestamoId($conexion) {
			$sql = 'SELECT IIF (MAX(PrestamoId) IS NULL, 1, MAX(PrestamoId) + 1) PrestamoId
					FROM Prestamos';

			$cursor = $conexion->ejecutarConsulta($sql); 

			$prestamoId = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$prestamoId = $temp['PrestamoId'];
				}
			}

			return $prestamoId;
		}

		static function nuevoPrestamo($conexion, $prestamoId, $libroId, $indice,
				$bibliotecarioId, $suscriptorId, $fechaSalida, $fechaEntrega) {
			$sql = "INSERT INTO Prestamos 
					VALUES (".$prestamoId.",".$libroId.", ".$indice.", 
							".$bibliotecarioId.", ".$suscriptorId.", '".$fechaSalida."',
							 '".$fechaEntrega."', 0, 0)";

			
			if ($conexion->ejecutarConsulta($sql)) {
				return true;
			}
			return false;
		}

		static function esResponsable($conexion, $libroId, $indice, $suscriptorId) {
			$sql = 'SELECT IIF (P.Entregado = 0, 1, 0) Responsable
					FROM Prestamos P
					WHERE P.Entregado = 0 AND P.LibroId = '.$libroId.' 
					AND P.Indice = '.$indice.' AND P.SuscriptorId = '.$suscriptorId;

			$cursor = $conexion->ejecutarConsulta($sql); 

			$responsable = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$responsable = $temp['Responsable'] == 1;
				}
			}

			return $responsable;
		}

		static function resgresarPrestamo($conexion, $libroId, $indice, $suscriptorId) {
			$sql = "UPDATE Prestamos SET Entregado = 1
					WHERE Entregado = 0 AND LibroId = ".$libroId." 
					AND Indice = ".$indice." AND SuscriptorId = ".$suscriptorId;

			
			if ($conexion->ejecutarConsulta($sql)) {
				return true;
			}

			return false;
		}

		static function ejecutarMultas($conexion) {
			$sql = 'UPDATE Prestamos
					SET Multa = Multa+20.00
					WHERE FechaEntrega < GETDATE() AND Entregado = 0';

			if ($conexion->ejecutarConsulta($sql)) {
				return true;
			}

			return false;
		}

		static function regresarDeudores($conexion) {
			$sql = "SELECT S.Email, S.Nombre+' '+S.Apellido NombreCompleto, P.Multa, L.Titulo
					FROM  Prestamos P
					INNER JOIN Suscriptor S ON S.SuscriptorId = P.SuscriptorId
					INNER JOIN Ejemplar E ON E.LibroId = P.LibroId AND E.Indice = P.Indice
					INNER JOIN Libro L ON L.LibroId = E.LibroId
					WHERE P.FechaEntrega < GETDATE() AND P.Entregado = 0";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$multados = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$multados[] = $temp;
				}
			}

			return $multados;
		}
	}
?>