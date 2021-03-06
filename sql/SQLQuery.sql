USE master;
USE BibliotecaDB;

SELECT * FROM Libro;

-- Query para buscar libros por codigo o título
SELECT L.Codigo, L.Titulo, L.Edicion, COUNT(E.LibroId) AS NEjemplares
FROM Libro L
LEFT JOIN Ejemplar E ON L.LibroId = E.LibroId
WHERE L.Codigo LIKE 'if%' OR L.Titulo LIKE '%if-1001%'
GROUP BY L.Codigo, L.Titulo, L.Edicion;

-- Query para buscar los autores de un libro
SELECT A.AutorId, A.Nombre, A.Apellido, A.Seudonimo, A.FechaNac, P.PaisId, P.Nombre NombrePais
FROM Libro L
INNER JOIN LibroxAutor LA ON L.LibroId = LA.LibroId
INNER JOIN Autor A ON A.AutorId = LA.AutorId
INNER JOIN Pais P ON A.PaisId = P.PaisId
WHERE L.Codigo = 'if-1001';

-- query para obtener todos los autores
SELECT A.AutorId, A.Nombre, A.Apellido, A.Seudonimo, A.FechaNac, P.PaisId, P.Nombre NombrePais
FROM Autor A 
INNER JOIN Pais P ON A.PaisId = P.PaisId;

-- query para obtener el numero de libros de un autor
SELECT COUNT(A.AutorId) NLibros
FROM Autor A -- hice un cruse por si un autor no tine libros entoces retornaria 0
LEFT JOIN LibroxAutor LA ON A.AutorId = LA.AutorId
WHERE A.AutorId = 1
GROUP BY A.AutorId;

-- query para seleccionar todas las editoriales
SELECT E.EditorialId, E.Nombre, E.Email, P.PaisId, P.Nombre NombrePais
FROM Editorial E
INNER JOIN Pais P ON E.PaisId = P.PaisId;

-- query para contar el numero de libros de una editorial
SELECT E.EditorialId, COUNT(E.EditorialId)
FROM Editorial E
INNER JOIN Libro L ON E.EditorialId = L.EditorialId
--WHERE E.EditorialId = 1
GROUP BY E.EditorialId

-- query para buscar libro por codigo 
SELECT L.LibroId, L.Codigo CodigoLib, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion,
		M.MateriaId, M.Codigo CodigoMat, M.Nombre NombreM, E.EditorialId, E.Nombre NombreE, E.Email,
		P.PaisId, P.Nombre NombrePais
FROM Libro L
INNER JOIN Materia M ON M.MateriaId = L.MateriaId
INNER JOIN Editorial E ON E.EditorialId = L.EditorialId
INNER JOIN Pais P ON P.PaisId = E.PaisId
WHERE L.Codigo = 'if-1001';

-- buscar ejemplares de libro por LibroId
SELECT E.LibroId, E.Indice, E.ProveedorId, Es.Estado, E.Observacion, E.FechaAdquiscion, E.Precio 
FROM Ejemplar E
INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
WHERE LibroId = 1;

-- buscar si un ejeplar esta disponible 
SELECT * FROM Prestamos;
SELECT P.LibroId, P.Indice, MAX(P.FechaSalida) FechaSalida
FROM Prestamos P
WHERE P.LibroId = 1 AND P.Indice = 1
GROUP BY P.LibroId, P.Indice;

SELECT E.LibroId, E.Indice, E.ProveedorId, Es.Estado, E.Observacion, E.FechaAdquiscion, E.Precio, 
	IIF (PT.Entregado IS NULL, 1, PT.Entregado) Disponible
FROM Ejemplar E
INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
LEFT JOIN (SELECT P.LibroId, P.Indice, MAX(P.FechaSalida) FechaSalida
	FROM Prestamos P
	GROUP BY P.LibroId, P.Indice) AS T 
	ON T.LibroId = E.LibroId AND T.Indice = E.Indice
LEFT JOIN Prestamos PT ON PT.LibroId = E.LibroId AND PT.Indice = E.Indice AND PT.FechaSalida = T.FechaSalida
WHERE E.LibroId = 1;

SELECT IIF (PT.Entregado IS NULL, 1, PT.Entregado) Disponible
FROM Ejemplar E
INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
LEFT JOIN (SELECT P.LibroId, P.Indice, MAX(P.FechaSalida) FechaSalida
	FROM Prestamos P
	GROUP BY P.LibroId, P.Indice) AS T 
	ON T.LibroId = E.LibroId AND T.Indice = E.Indice
LEFT JOIN Prestamos PT ON PT.LibroId = E.LibroId AND PT.Indice = E.Indice AND PT.FechaSalida = T.FechaSalida
WHERE E.LibroId = 1 AND E.Indice = 2

-- Retorna el proximo Id en Prestamos
SELECT IIF (MAX(PrestamoId) IS NULL, 1, MAX(PrestamoId) + 1) PrestamoId
FROM Prestamos;

-- Selecciona el id de el suscriptor por email
SELECT SuscriptorId, Nombre, Apellido, Email, Telefono
FROM Suscriptor
WHERE Email = 'maria97@gmail.com';

-- query para contar el numero de libros de una materia
SELECT COUNT(M.MateriaId)
FROM Materia M
INNER JOIN Libro L 
ON M.MateriaId = L.MateriaId
GROUP BY M.MateriaId

SELECT *FROM Libro
SELECT *FROM Materia

SELECT *FROM Autor

-- LIBROS POR MATERIA
SELECT L.Codigo, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, M.Nombre
FROM Libro L
INNER JOIN Materia M 
ON M.MateriaId = L.MateriaId
WHERE M.Codigo = 'if'

-- LIBROS POR AUTOR
SELECT L.Codigo, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, A.Nombre
FROM Libro L
INNER JOIN LibroxAutor LA
ON L.LibroId = LA.LibroId
INNER JOIN Autor A
ON LA.AutorId = A.AutorId
--WHERE LA.AutorId = 4
ORDER BY LA.AutorId

-- LIBROS POR EDITORIALES
SELECT L.Codigo, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, E.Nombre
FROM Libro L
INNER JOIN Editorial E
ON L.EditorialId = E.EditorialId
INNER JOIN Pais P
ON E.PaisId = E.PaisId
WHERE E.EditorialId = 1

SELECT *
FROM Libro L
INNER JOIN LibroxAutor LA
ON L.LibroId = LA.LibroId;

SELECT * FROM Ejemplar;

-- El siguiente id del suscriptor
SELECT IIF (MAX(SuscriptorId) IS NULL, 1, MAX(SuscriptorId) + 1) SuscriptorIdId
FROM Suscriptor

-- El suscriptor responsable de la entrega
SELECT IIF (P.Entregado = 0, 1, 0) Responsable
FROM Prestamos P
WHERE P.Entregado = 0 AND P.LibroId = 1 AND P.Indice = 2 AND P.SuscriptorId = 2;

-- busca un bibliotecario por email
SELECT B.SuscriptorId, S.Nombre, S.Apellido, S.Email, S.Telefono, B.Contraseña Contrasena, B.Salario
FROM Suscriptor S
INNER JOIN Bibliotecario B ON S.SuscriptorId = B.SuscriptorId
WHERE S.Email = 'maria97@gmail.com';

-- SUSCRITORES
SELECT *FROM Suscriptor
--SELECT *FROM Bibliotecario

--QUERY SOLO BIBLIOTECARIO QUE SON SUSCRIPTORES
SELECT S.Nombre, S.Apellido, S.Email, S.Telefono
FROM Bibliotecario B
INNER JOIN Suscriptor S
ON S.SuscriptorId = B.SuscriptorId

-- verrificar si los prestamos no se han pasado de la fecha

UPDATE Prestamos
SET Multa = Multa+20.00
WHERE FechaEntrega < GETDATE() AND Entregado = 0;

SELECT S.Email, S.Nombre+' '+S.Apellido NombreCompleto, P.Multa, L.Titulo
FROM  Prestamos P
INNER JOIN Suscriptor S ON S.SuscriptorId = P.SuscriptorId
INNER JOIN Ejemplar E ON E.LibroId = P.LibroId AND E.Indice = P.Indice
INNER JOIN Libro L ON L.LibroId = E.LibroId
WHERE P.FechaEntrega < GETDATE() AND P.Entregado = 0;

SELECT * FROM Prestamos;