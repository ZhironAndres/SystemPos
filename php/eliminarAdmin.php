<?php
session_start();
include "conexion.php";
if (!isset($_SESSION['correo'])) {
    echo '<script>
            alert("Por favor inicie sesión.");
            window.location = "iniciarSesion.php"
          </script>';
    die();
    session_destroy();
}


$id = $_GET["id"];

$sentencia = $conexion->prepare("DELETE FROM admins WHERE id = ?; ");
$resultado = $sentencia->execute([$id]);

if($resultado === TRUE) {
		echo '<script>
        	    alert("Registro eliminado exitosamente.");
            	window.location = "admin.php"
          	</script>';
	}else{
		echo "eror";
	}

?>