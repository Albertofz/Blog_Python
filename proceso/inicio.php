<?php 


include ("con_bd.php");

if (isset($_POST['iniciar'])) {

	    $user = $_POST["email"];
	    $pass = $_POST["pass"];

	    $pass= hash('sha256', $pass);

	    $consulta= "SELECT * FROM datos WHERE email = '$user' AND contraseña = '$pass'";
	    $resultado = mysqli_query($conexion,$consulta);

	    $r=mysqli_num_rows($resultado);

	    if ($r == 1){
	    	echo "<script>window.location='../inicio/index2.html'</script>";

	    } else if ($r == 0) {
	    echo "<script>alert('Este usuario no existe');
	window.location='../inicio/index.php'</script>";
	    } 
}
?>