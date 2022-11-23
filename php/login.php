<?php

include("conexion.php");
session_start();
 if (isset($_SESSION['id_usuario'])) {
	header("Location:/Principal.php");
 }
// Login
//if (!empty($_POST))
if (isset($_POST["ingresar"])){
	$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
	$password = mysqli_real_escape_string($conexion,$_POST['pass']);
	// contraseña incructada
	$password_encriptada = sha1($password);
	$sql = "SELECT idusuarios FROM usuarios 
	            WHERE usuario = '$usuario' AND password = '$password_encriptada' ";
	$resultado = $conexion->query($sql);
	$rows = $resultado->num_rows;
	if ($rows > 0) {
		$rows = $resultado->fetch_assoc();
		$_SESSION['id_usuario'] = $rows["idusuarios"];
		header("Location: Principal.php");
	}else{
		echo "<script>
		           alert('Usuario o Password Incorrecto');
				   window.location = '../HTML/Inicio.html';
		</script>";
	}
}


?>