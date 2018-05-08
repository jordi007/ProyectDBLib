<?php

	include_once("class_editorial.php");
	include_once("class_pais.php");
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
		private $descripcion;
		private $urlimg;
		private $autor;
		private $ejemplar;

		public function __construct($libroId,
					$editorial,
					$materia,
					$codigo,
					$titulo,
					$edicion,
					$isbn,
					$anio,
					$descripcion,
					$urlimg,
					$autor,
					$ejemplar){
			$this->libroId = $libroId;
			$this->editorial = $editorial;
			$this->materia = $materia;
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->edicion = $edicion;
			$this->isbn = $isbn;
			$this->anio = $anio;
			$this->descripcion = $descripcion;
			$this->urlimg = $urlimg;
			$this->autor = $autor;
			$this->ejemplar = $ejemplar;
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
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
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
		public function getEjemplar(){
			return $this->ejemplar;
		}
		public function setEjemplar(){
			$this->ejemplar = $ejemplar;
		}
		public function __toString(){
			$aut = '';
			foreach ($this->autor as $key => $value) {
				$aut .=  $value->__toString() . ', ';
			}
			return "LibroId: " . $this->libroId . 
				" editorial: " . $this->editorial . 
				" materia: " . $this->materia . 
				" Codigo: " . $this->codigo . 
				" Titulo: " . $this->titulo . 
				" Edicion: " . $this->edicion . 
				" Isbn: " . $this->isbn . 
				" Anio: " . $this->anio . 
				" Descripcion: " . $this->descripcion . 
				" Urlimg: " . $this->urlimg .
				" Autor: " . $aut;
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

		static function buscarLibroCodigo($conexion, $codigo) {
			$sql = "SELECT L.LibroId, L.Codigo CodigoLib, L.Titulo, L.Edicion, 
						L.ISBN, L.Anio, L.Descripcion, L.URLImg, M.MateriaId, 
						M.Codigo CodigoMat, M.Nombre NombreM, E.EditorialId, 
						E.Nombre NombreE, E.Email, P.PaisId, P.Nombre NombrePais
					FROM Libro L
					INNER JOIN Materia M ON M.MateriaId = L.MateriaId
					INNER JOIN Editorial E ON E.EditorialId = L.EditorialId
					INNER JOIN Pais P ON P.PaisId = E.PaisId
					WHERE L.Codigo = '".$codigo."'";

			$cursor = $conexion->ejecutarConsulta($sql); 

			$libro = false;

			if ($cursor) {
				if ($temp = $conexion->obtenerFila($cursor)) {
					$autores = Autor::buscarAutorLibro($conexion, $codigo);
					$ejemplares = Ejemplar::buscarEjeplarLibro($conexion, $temp['LibroId']);
					$libro = new Libro(
							$temp['LibroId'],
							new Editorial($temp['EditorialId'], 
								new Pais($temp['PaisId'],$temp['NombrePais']),
								$temp['NombreE'], $temp['Email']),
							new Materia($temp['MateriaId'],
								$temp['NombreM'], $temp['CodigoMat']),
							$temp['CodigoLib'],
							$temp['Titulo'],
							$temp['Edicion'],
							$temp['ISBN'],
							$temp['Anio'],
							$temp['Descripcion'],
							$temp['URLImg'],
							$autores,
							$ejemplares
						);
				}
			}

			return $libro;
		}
	}
?>