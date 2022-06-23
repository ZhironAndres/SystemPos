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




$id = $_SESSION["id_usuario"];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$fechaNaci=$_POST['fechaNaci'];
$residencia=$_POST['residencia'];
$sexo=$_POST['sexo'];
$documento=$_POST['documento'];
$numDocumet=$_POST['numDocumet'];
$telefono=$_POST['telefono'];
$nombreEmpresa=$_POST['nombreEmpresa'];
$fechaInicio=$_POST['fechaInicio'];
$fechaFinal=$_POST['fechaFinal'];
$cargo=$_POST['cargo'];
$nomInstitu=$_POST['nomInstitu'];
$fechainicial=$_POST['fechaInicial'];
$fechaFinalizacion=$_POST['fechaFinalizacion'];
$certificados=basename($_FILES["certificados"]["name"]);
$nombreFoto = basename($_FILES["foto"]["name"]);
$descripcion=$_POST['description'];
$nombreCV = basename($_FILES["files"]["name"]);
$lenguajes= $_POST['lenguajes'];
$herramientas= $_POST['herramientas'];


$sentencia = $conexion->prepare("UPDATE formulariousu SET foto=?,descripcion=?,ciudad=?,departamento=?,fechaNaci=?,residencia=?,sexo=?,documento=?,numDocumet=?,telefono=?,nombreEmpresa=?,fechaInicio=?,fechaFinal=?,cargo=?,nomInstitu=?,fechaInicial=?,fechaFinalizacion=?,certificados=?,files=?,lenguajes=?,herramientas=? where id=?;");
$resultado = $sentencia->execute([$nombreFoto,$descripcion,$ciudad, $departamento,$fechaNaci,$residencia,$sexo,$documento,$numDocumet,$telefono,$nombreEmpresa,$fechaInicio,$fechaFinal,$cargo,$nomInstitu,$fechainicial,$fechaFinalizacion,$certificados,$nombreCV,$lenguajes,$herramientas,$id]);


if($resultado === TRUE) {
		echo '<script>
        	    alert("Cambios guardados exitosamente.");
            	window.location = "paginaPrincipalUsuario.php"
          	</script>';
	}else{
		echo "eror";
	}
?>