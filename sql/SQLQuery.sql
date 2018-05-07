USE BibliotecaDB;

SELECT * FROM Libro;

-- Query para buscar libros por codigo o título
SELECT L.Codigo, L.Titulo, L.Edicion, COUNT(E.LibroId) AS NEjemplares
FROM Libro L
LEFT JOIN Ejemplar E ON L.LibroId = E.LibroId
WHERE L.Codigo LIKE 'if%' OR L.Titulo LIKE '%if-1001%'
GROUP BY L.Codigo, L.Titulo, L.Edicion;

-- Query para buscar los autores de un libro
SELECT A.Nombre, A.Apellido
FROM Libro L
INNER JOIN LibroxAutor LA ON L.LibroId = LA.LibroId
INNER JOIN Autor A ON A.AutorId = LA.AutorId
WHERE L.Codigo = 'if-1002';

-- query para obtener todos los autores
SELECT A.AutorId, A.Nombre, A.Apellido, A.Seudonimo, A.FechaNac, P.PaisId, P.NombrePais
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
SELECT COUNT(E.EditorialId)
FROM Editorial E
LEFT JOIN Libro L ON E.EditorialId = L.MateriaId
WHERE E.EditorialId = 1
GROUP BY E.EditorialId