<?php 
  
session_start();
include_once("conexion.php");
if (!isset($_SESSION['correo'])) {
    echo '<script>
            alert("Por favor inicie sesión.");
            window.location = "iniciarSesion.php"
          </script>';
    die();
    session_destroy();
}

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$clave1 = $_POST['clave1'];

$contraseña = ($clave != $clave1);

$query = $conexion->prepare('select * from usuario where correo= ?');
$query->execute([$correo]);

$emailExistencia = $query->fetchColumn();
//print_r($emailExistencia);

if ($emailExistencia > 0) {

    if ($contraseña == false) {
        $cambio = $conexion->prepare('update usuario set clave = ? where correo = ?');
        $cambio->execute([$clave, $correo]);

        if ($cambio) {
        	echo '<script>
						alert("Cambio de contraseña exitoso, inicie sesión.");
						window.location = "iniciarSesion.php"
					</script>';
        }

    } else {
       	echo '<script>
				alert("Las claves ingresadas no coinciden, intentelo nuevamente.");
				window.location = "iniciarSesion.php"
			</script>';
	}

} else {

	$query = $conexion->prepare('select * from empresa where correo= ?');
	$query->execute([$correo]);

	$emailExistencia = $query->fetchColumn();
	//print_r($emailExistencia);

	if ($emailExistencia > 0) {

	    if ($contraseña == false) {
	        $cambio = $conexion->prepare('update empresa set clave = ? where correo = ?');
	        $cambio->execute([$clave, $correo]);

	        if ($cambio) {
	        	echo '<script>
							alert("Cambio de contraseña exitoso, inicie sesión.");
							window.location = "iniciarSesion.php"
						</script>';
	        }

	    } else {
	       	echo '<script>
					alert("Las claves ingresadas no coinciden, intentelo nuevamente.");
					window.location = "iniciarSesion.php"
				</script>';
		} 
	}else{
		echo '<script>
					alert("Correo no registrado. Registrate!!");
					window.location = "empresaOUsuario.php"
				</script>';
	}
}

?>