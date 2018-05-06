<?php

	  include_once("class_editorial.php");
	  include_once("class_autor.php");

	class Libro{

		private $libroId;
		private $editorial;
		private $materia;
		private $codigo;
		private $titulo;
		private $edicion;
		private $isbn;
		private $anio;
		private $descipcion;
		private $urlimg;
		private $autor;

		public function __construct($libroId,
					$editorial,
					$materia,
					$codigo,
					$titulo,
					$edicion,
					$isbn,
					$anio,
					$descipcion,
					$urlimg,
					$autor){
			$this->libroId = $libroId;
			$this->editorial = $editorial;
			$this->materia = $materia;
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->edicion = $edicion;
			$this->isbn = $isbn;
			$this->anio = $anio;
			$this->descipcion = $descipcion;
			$this->urlimg = $urlimg;
			$this->autor = $autor;
		}
		public function getLibroId(){
			return $this->libroId;
		}
		public function setLibroId($libroId){
			$this->libroId = $libroId;
		}
		public function geteditorial(){
			return $this->editorial;
		}
		public function seteditorial($editorial){
			$this->editorial = $editorial;
		}
		public function getmateria(){
			return $this->materia;
		}
		public function setmateria($materia){
			$this->materia = $materia;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function getEdicion(){
			return $this->edicion;
		}
		public function setEdicion($edicion){
			$this->edicion = $edicion;
		}
		public function getIsbn(){
			return $this->isbn;
		}
		public function setIsbn($isbn){
			$this->isbn = $isbn;
		}
		public function getAnio(){
			return $this->anio;
		}
		public function setAnio($anio){
			$this->anio = $anio;
		}
		public function getDescipcion(){
			return $this->descipcion;
		}
		public function setDescipcion($descipcion){
			$this->descipcion = $descipcion;
		}
		public function getUrlimg(){
			return $this->urlimg;
		}
		public function setUrlimg($urlimg){
			$this->urlimg = $urlimg;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setAutor(){
			$this->autor = $autor;
		}
		public function __toString(){
			return "LibroId: " . $this->libroId . 
				" editorial: " . $this->editorial . 
				" materia: " . $this->materia . 
				" Codigo: " . $this->codigo . 
				" Titulo: " . $this->titulo . 
				" Edicion: " . $this->edicion . 
				" Isbn: " . $this->isbn . 
				" Anio: " . $this->anio . 
				" Descipcion: " . $this->descipcion . 
				" Urlimg: " . $this->urlimg .
				" Autor: " . $this->autor;
		}

		static function buscarLibro($conexion, $cadena) {
			$sql = "SELECT L.Codigo, L.Titulo, L.Edicion, COUNT(E.LibroId) AS NEjemplares
					FROM Libro L
					LEFT JOIN Ejemplar E ON L.LibroId = E.LibroId
					WHERE L.Codigo LIKE '".$cadena."%' OR L.Titulo LIKE '%".$cadena."%'
					GROUP BY L.Codigo, L.Titulo, L.Edicion";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$resultado = array();

			if ($cursor) {
				while ($temp = $conexion->obtenerFila($cursor)) {
					$resultado[] = $temp;
				}
			} else {
				return false;
			}

			return $resultado;
		}
	}
?>