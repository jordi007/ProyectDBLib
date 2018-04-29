<?php

	class Estado{

		private $estadoId;
		private $estado;

		public function __construct($estadoId,
					$estado){
			$this->estadoId = $estadoId;
			$this->estado = $estado;
		}
		public function getEstadoId(){
			return $this->estadoId;
		}
		public function setEstadoId($estadoId){
			$this->estadoId = $estadoId;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "EstadoId: " . $this->estadoId . 
				" Estado: " . $this->estado;
		}
	}
?>