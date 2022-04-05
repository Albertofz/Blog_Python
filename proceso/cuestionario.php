<?php  

if (isset($_POST['enviar'])) {

$p1= $_POST['p1'];
$p2= $_POST['p2'];
$p3= $_POST['p3'];
$p4= $_POST['p4'];
$p5= $_POST['p5'];
$p6= $_POST['p6'];
$p7= $_POST['p7'];
$p8= $_POST['p8'];
$p9= $_POST['p9'];
$p10= $_POST['p10'];

$mensaje= "";

$puntaje= 0;



if ($p1 == "f") {
	
	$puntaje = $puntaje + 2;
} 

if ($p2 == "v") {
	
	$puntaje = $puntaje + 2;
}

if ($p3 == "f") {
	
	$puntaje = $puntaje + 2;
}

if ($p4 == "f") {
	
	$puntaje = $puntaje + 2;
}


if ($p5 == "f") {
	
	$puntaje = $puntaje + 2;
}

if ($p6 == "f") {
	
	$puntaje = $puntaje + 2;
}

if ($p7 == "f") {
	
	$puntaje = $puntaje + 2;
}

if ($p8 == "f") {
	
	$puntaje = $puntaje + 2;
}


if ($p9 == "v") {
	
	$puntaje = $puntaje + 2;
}

if ($p10 == "f") {
	
	$puntaje = $puntaje + 2;
}

if ($puntaje <= 10) {

	$mensaje= "Muy mal";
}

else if ($puntaje <= 16) {

	$mensaje= "Ligeramente bien";
}

else if ($puntaje <= 20) {

	$mensaje= "Excelente";
}

include ("con_bd.php");


if ($conexion) {



	if (strlen($_POST['nom_ape']) >= 1){


	$nom_ape = $_POST['nom_ape'];
	$p_puntaje = $puntaje;
	$fecha_reg= date("d/m/y");

	date_default_timezone_set("Etc/GMT+4");

	$hora_reg= date("h:i:s a");

	
	/*$peticion= "SELECT * FROM datos WHERE nombre_apellido = '$nom_ape'";*/

	$consulta= "INSERT INTO puntos(user, puntos_usuario, fecha_reg, hora_reg) VALUES ('$nom_ape', '$p_puntaje','$fecha_reg', '$hora_reg')";
	
	
		$resul = mysqli_query($conexion,$consulta);


		if ($resul) {
			
			echo "<script>alert('Tu resultado es: $puntaje puntos, tu puntaje es $mensaje');
	window.location='../inicio/cuestionario.html'</script>";
			/*echo "Datos guardados correctamente";*/

		}else {

			echo "Hubo un error";
			}
		}
	}
} else {

	echo "falla en la conexion";
}



?>