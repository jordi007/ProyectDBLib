<?php

	class Libro{

		private $libroId;
		private $editorialId;
		private $materia;
		private $codigo;
		private $titulo;
		private $edicion;
		private $isbn;
		private $anio;
		private $descipcion;
		private $urlimg;

		public function __construct($libroId,
					$editorialId,
					$materia,
					$codigo,
					$titulo,
					$edicion,
					$isbn,
					$anio,
					$descipcion,
					$urlimg){
			$this->libroId = $libroId;
			$this->editorialId = $editorialId;
			$this->materia = $materia;
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->edicion = $edicion;
			$this->isbn = $isbn;
			$this->anio = $anio;
			$this->descipcion = $descipcion;
			$this->urlimg = $urlimg;
		}
		public function getLibroId(){
			return $this->libroId;
		}
		public function setLibroId($libroId){
			$this->libroId = $libroId;
		}
		public function getEditorialId(){
			return $this->editorialId;
		}
		public function setEditorialId($editorialId){
			$this->editorialId = $editorialId;
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
		public function __toString(){
			return "LibroId: " . $this->libroId . 
				" EditorialId: " . $this->editorialId . 
				" materia: " . $this->materia . 
				" Codigo: " . $this->codigo . 
				" Titulo: " . $this->titulo . 
				" Edicion: " . $this->edicion . 
				" Isbn: " . $this->isbn . 
				" Anio: " . $this->anio . 
				" Descipcion: " . $this->descipcion . 
				" Urlimg: " . $this->urlimg;
		}
	}
?>