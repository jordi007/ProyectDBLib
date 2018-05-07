USE BibliotecaDB;

INSERT INTO Estado VALUES (1, 'Optimo');
INSERT INTO Estado VALUES (2, 'Buen Estado');
INSERT INTO Estado VALUES (3, 'Regular');
INSERT INTO Estado VALUES (4, 'Dañado');
INSERT INTO Estado VALUES (5, 'Ver y no tocar');

SELECT * FROM Estado;

INSERT INTO Materia VALUES (1, 'if', 'Informática');
INSERT INTO Materia VALUES (2, 'mt', 'Matemática');
INSERT INTO Materia VALUES (3, 'fl', 'Filosofía');
INSERT INTO Materia VALUES (4, 'sc', 'Socilogía');
INSERT INTO Materia VALUES (5, 'ec', 'Economía');
INSERT INTO Materia VALUES (6, 'fs', 'Física');
INSERT INTO Materia VALUES (7, 'hs', 'Historia');
INSERT INTO Materia VALUES (8, 'gg', 'Geografía');
INSERT INTO Materia VALUES (9, 'qm', 'Química');
INSERT INTO Materia VALUES (10, 'bl', 'Biología');

INSERT INTO Pais VALUES (1, 'España');
INSERT INTO Pais VALUES (2, 'Estados Unidos');
INSERT INTO Pais VALUES (3, 'México');
INSERT INTO Pais VALUES (4, 'Brasil');
INSERT INTO Pais VALUES (5, 'Honduras');
INSERT INTO Pais VALUES (6, 'Argentina');
INSERT INTO Pais VALUES (7, 'Egipto');
INSERT INTO Pais VALUES (8, 'Canada');

SELECT * FROM Pais;

INSERT INTO Autor VALUES (1, 'Ramez', 'Elmasri', NULL, '1950-10-20', 6); 
INSERT INTO Autor VALUES (2, 'Shamkant', 'Navathe', NULL, '1970-3-12', 2); 
INSERT INTO Autor VALUES (3, 'John', 'Maxwell', 'jcmaxwell', '1960-4-15', 2); 
INSERT INTO Autor VALUES (4, 'Doris', 'Appleby', 'apple', '1965-6-16', 8); 
INSERT INTO Autor VALUES (5, 'Julius', 'Vandekople', NULL, '1955-7-11', 2); 

SELECT * FROM Autor;

INSERT INTO Editorial VALUES (1, 1, 'Pearson Educación S.A.', 'pearson@mail.com'); 
INSERT INTO Editorial VALUES (2, 2, 'Lider Latino', 'liderinfo@latino.com'); 
INSERT INTO Editorial VALUES (3, 2, 'McGraw-Hill', 'macgrawhill@mail.com'); 

SELECT * FROM Editorial;

-- capos: id, codigo, editorial, materia, titulo, edicion, isbn, año, descripcion, urlImg
INSERT INTO Libro VALUES (1, 'if-1001', 1, 1,'Fundamentos de Sistemas de Bases de datos',
		5, '978-84-78-7829-085-7', 2007, 'Modelo relacional y SQL', NULL);
INSERT INTO Libro VALUES (2, 'sc-2002', 2, 4,'El Líder 360°',
		1, '0-88113-903-3', 2005, 'Para personas emprendedoras', NULL);
INSERT INTO Libro VALUES (3, 'if-1002', 3, 1,'Lenguajes de Programación: Paradigma y Practica',
		3, '970-10-1945-8', 1998, 'Paradigmas: imperativo y declarativo', NULL);

SELECT * FROM Libro;

INSERT INTO LibroxAutor VALUES (1,1,1);
INSERT INTO LibroxAutor VALUES (2,1,1);
INSERT INTO LibroxAutor VALUES (3,1,2);
INSERT INTO LibroxAutor VALUES (4,1,3);
INSERT INTO LibroxAutor VALUES (5,1,3);

SELECT * FROM LibroxAutor; 

SELECT A.Nombre, L.Titulo
FROM  Autor AS A
INNER JOIN LibroxAutor LA ON A.AutorId = LA.AutorId
INNER JOIN Libro L ON LA.LibroId = L.LibroId
WHERE L.LibroId = 1;

INSERT INTO Suscriptor VALUES (1, 'María', 'Medina', 'maria97@gmail.com', '9979-2117');
INSERT INTO Suscriptor VALUES (3, 'Tereza', 'Ramos', 'tramos98@yahoo.com', '8991-1234');
INSERT INTO Suscriptor VALUES (2, 'Jose', 'Juarez', 'jjuarez@gmail.com', '9978-2134');
INSERT INTO Suscriptor VALUES (4, 'Mario', 'Molina', 'mario.molina@hotmail.com', NULL);
INSERT INTO Suscriptor VALUES (5, 'Susan', 'Gutierrez', 'susan_gut@gmail.com', '9315-7890');

INSERT INTO Bibliotecario VALUES (1, 'asd.456', 10800);

SELECT * FROM Suscriptor;

INSERT INTO Ciudad VALUES (1, 'Tegucigalpa');
INSERT INTO Ciudad VALUES (2, 'San Pedro Sula');

SELECT * FROM Ciudad;

INSERT INTO Colonia VALUES (1, 1, 'Kennedy');
INSERT INTO Colonia VALUES (2, 1, 'Centroamerica');
INSERT INTO Colonia VALUES (3, 1, 'Lomas');

SELECT * FROM Colonia;

INSERT INTO Proveedor VALUES (1, 'Distribuciones S.A.', '22456521', 'distro_sa@mail.hn');
INSERT INTO Proveedor VALUES (2, 'Don Quijote', '22453221', 'quijote_honduras@gmail.com');

SELECT * FROM Proveedor;
DELETE  FROM Ejemplar;
INSERT INTO Ejemplar VALUES (1, 1, 2, 3, 'Desgaste en la pasta', '2017-1-1', 1200);
INSERT INTO Ejemplar VALUES (1, 2, 2, 3, 'Falta hoja # 150', '2017-1-1', 1200);
INSERT INTO Ejemplar VALUES (1, 3, 2, 1, 'Ninguna', '2017-1-1', 1200);
INSERT INTO Ejemplar VALUES (1, 4, 2, 1, 'Ninguna', '2017-1-1', 1200);
INSERT INTO Ejemplar VALUES (3, 1, 1, 4, 'Desgaste en la pasta', '2007-2-15', 800);
INSERT INTO Ejemplar VALUES (3, 2, 1, 3, 'Desgaste en la pasta', '2007-2-15', 800);

SELECT * FROM Prestamos;
INSERT INTO Prestamos VALUES (1, 1, 2, 1, 2, '2018-5-7', '2018-5-15', 0, 0);
INSERT INTO Prestamos VALUES (2, 1, 1, 1, 3, '2018-5-1', '2018-5-5', 1, 0);