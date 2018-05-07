<?php
	class Ejemplar {
		private $indice;
		private $proveedor;
		private $estado;
		private $observacion;
		private $fechaAdquisicion;
		private $precio;

		public function __construct(
					$indice,
					$proveedor,
					$estado,
					$observacion,
					$fechaAdquisicion,
					$precio){
			$this->indice = $indice;
			$this->proveedor = $proveedor;
			$this->estado = $estado;
			$this->observacion = $observacion;
			$this->fechaAdquisicion = $fechaAdquisicion;
			$this->precio = $precio;
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
		public function __toString(){
			return " Indice: " . $this->indice . 
				" proveedor: " . $this->proveedor . 
				" estado: " . $this->estado . 
				" Observacion: " . $this->observacion . 
				" FechaAdquisicion: " . $this->fechaAdquisicion . 
				" Precio: " . $this->precio;
		}

		static function buscarEjeplarLibro($conexion, $idLibro) {
			$sql = 'SELECT E.Indice, E.ProveedorId, Es.Estado, E.Observacion, E.FechaAdquiscion, E.Precio 
					FROM Ejemplar E
					INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
					WHERE LibroId = '.$idLibro;

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
						$temp['Precio']
					);
				}
			} else {
				return false;
			}

			return $Ejemplares;
		}
	}
?>