<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../estilo/estilo-reg.css">
	
</head>

<body>
	   <header class="mb-2">
		<nav class="navbar navbar-light bg-light">	
  	<div class="container-fluid">
    	<a class="navbar-brand">
      <img src="../imagenes/icono.jpg"  alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Python
   	 </a>

   	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="reg.php">Registrate</a>
        <a class="nav-link" href="index.php">Inciar Sesion</a>
      </div>
       
  </div>
	</nav>
	</header>

	<div class="container-fluid">
		<div class="mx-auto">
			<form class="login-box border border-info" method="post">
	    	<h1>¡Regístrate!</h1>

			<label>Nombre y Apellido</label>
	    	<input type="text" name="nom_ape" placeholder="Nombre/Apellido">

	    <label>Correo electrónico</label>
	        <input type="text" name="email" placeholder="Correo electrónico">  

			<label>Contraseña</label>
	        <input type="password" name="pass" placeholder="Contraseña"> 

		
	    	<input class="bg-warning" type="submit" name="enviar">
	    	<a href="index.php">¿Ya tienes una cuenta? Inicia Sesión</a>
	    </form>

		</div>
	</div>

<div>

<?php
 include ("../proceso/registro.php");
?>
</body>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
</html>