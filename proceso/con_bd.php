<?php

$sv="localhost";
$user="root";
$pass="";
$bd="registro_p";

$conexion= mysqli_connect($sv,$user,$pass,$bd);
	if (!$conexion) {

		echo "error en la conexion con el servidor";	
} 
?>