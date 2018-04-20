USE master

CREATE DATABASE biblioteca
USE biblioteca

CREATE TABLE Suscriptor(
SuscriptorId	INTEGER		PRIMARY KEY,
Nombre		VARCHAR(50),
Apellido	VARCHAR(50),
Email		VARCHAR(50),
Telefono	VARCHAR(8)
);

CREATE TABLE Autor(
AutorId		INTEGER		PRIMARY KEY,
Nombre		VARCHAR(50),
Apellido	VARCHAR(50),
Seudonimo	VARCHAR(30),
FechaNacimiento	DATE,
Nacionalidad	VARCHAR(30)
);

CREATE TABLE Materia(
MateriaId	INTEGER		PRIMARY KEY,
Nombre		VARCHAR(50)
);

CREATE TABLE Proveedor(
ProveedorId	INTEGER		PRIMARY KEY,
Nombre		VARCHAR(70),
Direccion	VARCHAR(100),
Telefono	VARCHAR(20),
Email		VARCHAR(50)
);

CREATE TABLE Prestamo(
PrestamoId	INTEGER		PRIMARY KEY,
LibroId		INTEGER,
Indice		INTEGER,
SuscriptorId	INTEGER,
FechaSalida	DATE,
FechaEntrega	DATE,
Entregado	BIT,
Multa		DECIMAL(13,2)
);