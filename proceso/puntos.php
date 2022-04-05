<?php

include ("con_bd.php");


if ($conexion) {


if (isset($_POST['enviar'])) {
	if (strlen($_POST['nom_ape']) >= 1){


	$nom_ape = $_POST['nom_ape']);
	$puntaje = "";
	$fecha_reg= date("d/m/y");

	
	$peticion= "SELECT * FROM datos WHERE nombre_apellido = '$nom_ape'";

	$consulta= "INSERT INTO puntos(user, puntos_usuario, fecha_reg) VALUES ('$peticion', '$puntaje','$fecha_reg')";
	$resul = mysqli_query($conexion,$consulta);


		if ($resul) {
			
			
			echo "Datos guardados correctamente";

		}else {

			echo "Hubo un error";
			}
		}
	}
} else {

	echo "falla e la conexion";
}

?>