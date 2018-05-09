<?php 
    session_start();
    if (isset($_SESSION["id"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca 935</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

</head>
<body class="text-center">
    <form class="form-signin">
    	<h1 class="h3 mb-3 font-weight-normal">
    		<a class="text-dark" href="index.php">Biblioteca 935</a>
    	</h1>
    	<h1 class="h5 mb-3 font-weight-normal">Iniciar Sesión</h1>
      	<label for="inputEmail" class="sr-only">Email address</label>
      	<input type="email" id="txt-email" name="txt-email" class="form-control" placeholder="Email address" required autofocus>
      	<label for="inputPassword" class="sr-only">Password</label>
      	<input type="password" id="txt-password" name="txt-password" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="button" value="Iniciar" id="btn-login">
        <p id="div-msg"></p>
        <p class="mt-5 mb-3 text-muted">Biblioteca 935 &copy; 2017-2018</p>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js_sistema/login.js"></script>

</body>

</html>
