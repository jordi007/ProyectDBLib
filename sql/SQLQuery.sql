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
