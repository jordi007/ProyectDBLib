-- Solo DDL
USE master;

CREATE DATABASE BibliotecaDB
-- DROP DATABASE BibliotecaDB
GO
USE BibliotecaDB;

CREATE TABLE Suscriptor(
	SuscriptorId 	INTEGER 		PRIMARY KEY,
	Nombre 			VARCHAR(50) 	NOT NULL,
	Apellido 		VARCHAR(50) 	NOT NULL,
	Email 			VARCHAR(50) 	NOT NULL UNIQUE,
	Telefono 		VARCHAR(20)		NULL
);

CREATE TABLE Bibliotecario(
	SuscriptorId 	INTEGER 		PRIMARY KEY,
	Contraseña		VARCHAR(50)		NOT NULL,
	Salario			DECIMAL(13,2)	NOT NULL,
	
	CONSTRAINT fkSuscriptorEnBibliotecario FOREIGN KEY(SuscriptorId)
		REFERENCES Suscriptor(SuscriptorId)  
);

CREATE TABLE Pais(
	PaisId 		INTEGER 		PRIMARY KEY,
	Nombre 		VARCHAR(30)		NOT NULL UNIQUE
);

CREATE TABLE Autor(
	AutorId 		INTEGER 		PRIMARY KEY,
	Nombre		 	VARCHAR(50)		NOT NULL,
	Apellido	 	VARCHAR(50)		NOT NULL,
	Seudonimo 		VARCHAR(30)		NULL,
	FechaNac		DATE			NOT NULL,
	PaisId 			INTEGER,

	CONSTRAINT fkPaisAutor FOREIGN KEY (PaisId)
		REFERENCES Pais(PaisId)
);

CREATE TABLE Editorial(
	EditorialId 	INTEGER 		PRIMARY KEY,
	PaisId 			INTEGER,
	Nombre	 		VARCHAR(70),
	Email			VARCHAR(50)

	CONSTRAINT fkNacionalidadEditorial FOREIGN KEY (PaisId) 
		REFERENCES Pais(PaisId)
);

CREATE TABLE Categoria(
	CategoriaId 	INTEGER 		PRIMARY KEY,
	Nombre	 		VARCHAR(30) 	UNIQUE
);

CREATE TABLE Libro(
	LibroId 		INTEGER			PRIMARY KEY,
	EditorialId		INTEGER 		NOT NULL,
	CategoriaId		INTEGER 		NOT NULL,
	Titulo 			VARCHAR(90)		NOT NULL,
	Edicion 		INTEGER			NOT NULL,
	ISBN 			VARCHAR(50)		NOT NULL UNIQUE,
	Anio 			INTEGER			CHECK (Anio > 0 AND Anio <= 9999),
	Descripcion 	VARCHAR(300),

	CONSTRAINT fkEditorial FOREIGN KEY (EditorialId) 
		REFERENCES Editorial(EditorialId),
	CONSTRAINT fkCategoria FOREIGN KEY (CategoriaId) 
		REFERENCES Categoria(CategoriaId)
);

CREATE TABLE LibroxAutor(
	AutorId 		INTEGER,
	Indice 			INTEGER,
	LibroId 		INTEGER 		NOT NULL,

	PRIMARY KEY (AutorId, Indice),
	CONSTRAINT fkAutor FOREIGN KEY (AutorId) REFERENCES Autor(AutorId),
	CONSTRAINT fkLibro FOREIGN KEY (LibroId) REFERENCES Libro(LibroId)
);

CREATE TABLE Estado(
	EstadoId		INTEGER 		PRIMARY KEY,
	Estado			VARCHAR(30)
);

CREATE TABLE Proveedor(
	ProveedorId 	INTEGER 		PRIMARY KEY,
	Proveedor 		VARCHAR(70) 	NOT NULL,
	Direccion 		VARCHAR(100),
	Telefono 		VARCHAR(20)		NOT NULL UNIQUE,
	Email	 		VARCHAR(50)		NOT NULL UNIQUE
);	

CREATE TABLE Ejemplar(
	LibroId 		INTEGER 		NOT NULL,
	Indice 			INTEGER 		NOT NULL,
	ProveedorId 	INTEGER,
	EstadoId 		INTEGER,
	Observacion 	VARCHAR(200),
	FechaAdquiscion	DATE 			NOT NULL,
	Precio 			DECIMAL(13,2)	NOT NULL,

	PRIMARY KEY (LibroId, Indice),
	CONSTRAINT fkLibroEjemplar FOREIGN KEY (LibroId) REFERENCES Libro(LibroId),
	CONSTRAINT fkEstadoEjemplar FOREIGN KEY (EstadoId) 
		REFERENCES Estado(EstadoId),
	CONSTRAINT fkProveedorEjemplar FOREIGN KEY (ProveedorId) 
		REFERENCES Proveedor(ProveedorId)
);

CREATE TABLE Prestamos(
	PrestamoId 		INTEGER 	PRIMARY KEY,
	LibroId 		INTEGER,
	Indice 			INTEGER,
	BibliotecarioId INTEGER,
	SuscriptorId 	INTEGER,
	FechaSalida 	DATE 		NOT NULL,
	FechaEntrega 	DATE 		NOT NULL,
	Entregado 		BIT,
	Multa 			DECIMAL(13,2),

	CONSTRAINT fkLibroPrestado FOREIGN KEY (LibroId, Indice) 
		REFERENCES Ejemplar(LibroId, Indice),
	CONSTRAINT fkSuscriptor FOREIGN KEY (SuscriptorId)
		REFERENCES Suscriptor(SuscriptorId),
	CONSTRAINT fkBibliotecarioPrestamo FOREIGN KEY (BibliotecarioId) 
		REFERENCES Bibliotecario(SuscriptorId)
);
