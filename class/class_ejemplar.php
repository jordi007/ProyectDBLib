<?php
	class Ejemplar {
		private $indice;
		private $proveedor;
		private $estado;
		private $observacion;
		private $fechaAdquisicion;
		private $precio;
		private $disponible;

		public function __construct(
					$indice,
					$proveedor,
					$estado,
					$observacion,
					$fechaAdquisicion,
					$precio,
					$disponible){
			$this->indice = $indice;
			$this->proveedor = $proveedor;
			$this->estado = $estado;
			$this->observacion = $observacion;
			$this->fechaAdquisicion = $fechaAdquisicion;
			$this->precio = $precio;
			$this->disponible = $disponible;
		}
		public function getIndice(){
			return $this->indice;
		}
		public function setIndice($indice){
			$this->indice = $indice;
		}
		public function getProveedor(){
			return $this->proveedor;
		}
		public function setProveedor($proveedor){
			$this->proveedor = $proveedor;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
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
		public function isDisponible(){
			return $this->disponible;
		}
		public function setDisponible($Disponible){
			$this->disponible = $disponible;
		}

		public function __toString(){
			return " Indice: " . $this->indice . 
				" proveedor: " . $this->proveedor . 
				" estado: " . $this->estado . 
				" Observacion: " . $this->observacion . 
				" FechaAdquisicion: " . $this->fechaAdquisicion . 
				" Precio: " . $this->precio .
				" disponible: " . $this->disponible;
		}

		static function ejemplarDisponible($conexion, $libroId, $indice) {
			$sql = 'SELECT IIF (PT.Entregado IS NULL, 1, PT.Entregado) Disponible
					FROM Ejemplar E
					INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
					LEFT JOIN (SELECT P.LibroId, P.Indice, MAX(P.FechaSalida) FechaSalida
						FROM Prestamos P
						GROUP BY P.LibroId, P.Indice) AS T 
						ON T.LibroId = E.LibroId AND T.Indice = E.Indice
					LEFT JOIN Prestamos PT ON PT.LibroId = E.LibroId AND PT.Indice = E.Indice AND PT.FechaSalida = T.FechaSalida
					WHERE E.LibroId = '.$libroId.' AND E.Indice = '.$indice;

			$cursor = $conexion->ejecutarConsulta($sql); 

			$disponible = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$disponible = $temp['Disponible'] == 1;
				}
			}

			return $disponible;
		}

		static function buscarEjeplarLibro($conexion, $idLibro) {
			$sql = 'SELECT E.LibroId, E.Indice, E.ProveedorId, Es.Estado,
						E.Observacion, E.FechaAdquiscion, E.Precio, 
						IIF (PT.Entregado IS NULL, 1, PT.Entregado) Disponible
					FROM Ejemplar E
					INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
					LEFT JOIN (SELECT P.LibroId, P.Indice, MAX(P.FechaSalida) FechaSalida
						FROM Prestamos P
						GROUP BY P.LibroId, P.Indice) AS T 
						ON T.LibroId = E.LibroId AND T.Indice = E.Indice
					LEFT JOIN Prestamos PT 
						ON PT.LibroId = E.LibroId AND PT.Indice = E.Indice AND PT.FechaSalida = T.FechaSalida
					WHERE E.LibroId = '.$idLibro;

			$cursor = $conexion->ejecutarConsulta($sql); 

			$Ejemplares = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$Ejemplares[] = new Ejemplar(
						$temp['Indice'], 
						$temp['ProveedorId'], 
						$temp['Estado'], 
						$temp['Observacion'],
						$temp['FechaAdquiscion'],
						$temp['Precio'],
						$temp['Disponible'] == 1
					);
				}
			} else {
				return false;
			}

			return $Ejemplares;
		}
	}
?>