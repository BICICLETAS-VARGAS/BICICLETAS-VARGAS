<?php
include("conexion.php");



if (isset($_POST["registrar"])) {
	$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
	$password = mysqli_real_escape_string($conexion,$_POST['pass']);
	// contraseña incructada
	$password_encriptada = sha1($password);
	$sqluser = "SELECT idusuarios FROM usuarios 
	                   WHERE usuario = '$usuario'";
	$resultadouser = $conexion->query($sqluser);
	$filas = $resultadouser->num_rows;
	if ($filas > 0) {
		echo "<script>
		   alert('ALGO SALIO MAL VUELVA A INTENTARLO');
		  window.location = '/HTML/Inicio.html';
		</script>";
	}else{
		// Insertar informacion del usuario
		$sqlusuario = "INSERT INTO usuarios(
			Nombre,Correo,Usuario,Password)
			    VALUES ('$nombre','$correo','$usuario','$password_encriptada')";
		$resultadousuario = $conexion->query($sqlusuario);
		if ($resultadousuario > 0) {
			echo "<script>
                alert('REGISTRO EXITOSO')
				window.location = '/login.php';
			</script>";
		}else{
			echo "<script>
			    alert('Error al registrarse');
				window.location = '/HTML/Inicio.html';
			</script>";
		}
	}
}



?>