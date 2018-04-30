<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIBLIOTECA BD-I</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/estilos.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>
  <body>    
 
      <?php  include 'menuAdmin.php'; ?> 

         <h1 class="texto espacio " >Libros disponibles</h1>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Otro campo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <!-- comienzo de los form -->

          <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
           <h3>Insertar libro</h3>
            <form>
              <div class="form-row">
                <input class="form-control" type="" id="" name="txt-titulo-libro" placeholder="Titulo del libro">
                <input class="form-control" type="" id="" name="" placeholder="Editorial">
                <input class="form-control" type="" id="" name="" placeholder="Categoria">
                <input class="form-control" type="" id="" name="" placeholder="Codigo generado automaticamente">
                <input class="form-control" type="" id="" name="" placeholder="Edicion">
                <input class="form-control" type="" id="" name="" placeholder="ISBN">
                <input class="form-control" type="" id="" name="" placeholder="Año de publicación">
                <input class="form-control" type="" id="" name="" placeholder="Descripción del libro">
                <input class="form-control" type="" id="" name="" placeholder="Url de la imagen"> 
                <button type="submit" class="btn btn-info espacio">Insertar libro</button>
              </div>
            </form>
          </div>

          <!-- modificar libro -->
          <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
           <h3>Modificar libro</h3>
            <form>
              <div class="form-row">
                <input class="form-control" type="" id="" name="txt-titulo-libro2" placeholder="Titulo del libro">
                <input class="form-control" type="" id="" name="txt-publicacion-libro" placeholder="alodAño de publicación">
                <input class="form-control" type="" id="" name="txt-descrip-libro" placeholder="Descripción del libro">
                <input class="form-control" type="" id="" name="txt-url-libro" placeholder="Url de la imagen"> 
                <button type="submit" class="btn btn-info espacio">Insertar libro</button>
              </div>
            </form>
          </div>

          <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
           <h3>Borrar ejemplar del libro</h3>
            <form>
              <div class="form-row">
                <input class="form-control" type="" id="" name="" placeholder="Titulo del libro">
                <input class="form-control" type="" id="" name="" placeholder="Codigo del ejemplar">
                <button type="submit" class="btn btn-danger espacio">Borrar libro</button>
              </div>
            </form>
          </div>
      

  
<!--<div class="espacio1"></div> -->

  
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
