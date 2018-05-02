USE BibliotecaDB;

INSERT INTO Estado VALUES (1, 'Optimo');
INSERT INTO Estado VALUES (2, 'Regular');
INSERT INTO Estado VALUES (3, 'Obsoleto');

SELECT * FROM Estado;

INSERT INTO Materia VALUES (1, 'Informática');
INSERT INTO Materia VALUES (2, 'Matemática');
INSERT INTO Materia VALUES (3, 'Filosofía');
INSERT INTO Materia VALUES (4, 'Socilogía');
INSERT INTO Materia VALUES (5, 'Economía');
INSERT INTO Materia VALUES (6, 'Física');
INSERT INTO Materia VALUES (7, 'Historia');
INSERT INTO Materia VALUES (8, 'Geografía');
INSERT INTO Materia VALUES (9, 'Química');
INSERT INTO Materia VALUES (10, 'Biología');

INSERT INTO Pais VALUES (1, 'España');
INSERT INTO Pais VALUES (2, 'Estados Unidos');
INSERT INTO Pais VALUES (3, 'México');
INSERT INTO Pais VALUES (4, 'Brasil');
INSERT INTO Pais VALUES (5, 'Honduras');
INSERT INTO Pais VALUES (6, 'Argentina');
INSERT INTO Pais VALUES (7, 'Egipto');

SELECT * FROM Pais;

INSERT INTO Autor VALUES (1, 'Ramez', 'Elmasri', NULL, '1950-10-20', 6); 
INSERT INTO Autor VALUES (2, 'Shamkant', 'Navathe', NULL, '1970-3-12', 2); 

SELECT * FROM Autor;

INSERT INTO Editorial VALUES (1, 1, 'Pearson Educación S.A.', 'pearson@mail.com'); 

SELECT * FROM Editorial;

INSERT INTO Libro VALUES (1, 1, 1, 'FS005','Fundamentos de Sistemas de Bases de datos',
		5, '978-84-78-7829-085-7', 2007, 'Modelo relacional y SQL', NULL);

SELECT * FROM Libro;

INSERT INTO LibroxAutor VALUES (1,1,1);
INSERT INTO LibroxAutor VALUES (2,1,1);

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


SELECT * FROM Suscriptor;