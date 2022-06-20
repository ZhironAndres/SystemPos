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

if(!isset($_POST["correo"]) || !isset($_POST["clave"])) exit();


$id = $_POST["id"];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST["correo"];
$clave = $_POST["clave"];

$sentencia = $conexion->prepare("UPDATE usuario SET nombres = ?, apellidos = ?, correo = ?, clave = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombres, $apellidos, $correo, $clave, $id]);

if($resultado === TRUE) {
		echo '<script>
        	    alert("Cambios guardados exitosamente.");
            	window.location = "admin.php"
          	</script>';
	}else{
		echo "eror";
	}
?>