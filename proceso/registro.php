<?php

include ("con_bd.php");

if (isset($_POST['enviar'])) {
	if (strlen($_POST['nom_ape']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1) {

		$name= trim($_POST['nom_ape']);
		$email= trim($_POST['email']);
		$pass= trim($_POST['pass']);
		$fecha_reg= date("d/m/y");

		$pass= hash('sha256', $pass);

		$consulta= "INSERT INTO datos(nombre_apellido, email, contraseña, fecha_registro) VALUES ('$name','$email','$pass','$fecha_reg')";

		$resul= mysqli_query($conexion,$consulta);

		if ($resul) {
			
			echo "<script>alert('¡Te has inscripto correctamente!');
	window.location='../inicio/index.php'</script>";
			/*?> 
	    	<h3>¡Te has inscripto correctamente!</h3>
	    	<a href="../inicio/ini-se.php">Inicia sesion</a>
	    	<a href="../inicio/reg.php">voler</a>
           <?php*/
		} else {
			?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
		}	
		
	}
	else  {

		echo "Por favor rellene los campos";
	}
}


?>