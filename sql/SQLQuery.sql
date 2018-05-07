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
SELECT COUNT(E.EditorialId)
FROM Editorial E
LEFT JOIN Libro L ON E.EditorialId = L.MateriaId
WHERE E.EditorialId = 1
GROUP BY E.EditorialId

-- query para buscar libro por codigo 
SELECT L.LibroId, L.Codigo CodigoLib, L.Titulo, L.Edicion, L.ISBN, L.Anio, L.Descripcion, L.URLImg,
		M.MateriaId, M.Codigo CodigoMat, M.Nombre NombreM, E.EditorialId, E.Nombre NombreE, E.Email,
		P.PaisId, P.Nombre NombrePais
FROM Libro L
INNER JOIN Materia M ON M.MateriaId = L.MateriaId
INNER JOIN Editorial E ON E.EditorialId = L.EditorialId
INNER JOIN Pais P ON P.PaisId = E.PaisId
WHERE L.Codigo = 'if-1001';

-- buscar ejemplares de libro por LibroId
SELECT E.Indice, E.ProveedorId, Es.Estado, E.Observacion, E.FechaAdquiscion, E.Precio 
FROM Ejemplar E
INNER JOIN Estado Es ON E.EstadoId = Es.EstadoId
WHERE LibroId = 1;

-- Retorna el proximo Id en Prestamos
SELECT IIF (MAX(PrestamoId) IS NULL, 1, MAX(PrestamoId) + 1) PrestamoId
FROM Prestamos;

-- Selecciona el id de el suscriptor por email
SELECT SuscriptorId, Nombre, Apellido, Email, Telefono
FROM Suscriptor
WHERE Email = 'maria97@gmail.com';