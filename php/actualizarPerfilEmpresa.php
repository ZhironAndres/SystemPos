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

$id = $_SESSION["empresa_id"];
$nombreFoto = basename($_FILES["foto"]["name"]);
$descripcion=$_POST['description'];
$ubicacion=$_POST['ubicacion'];
$nit=$_POST['nit'];
$fechaFundacion=$_POST['fechaFundacion'];
$telefono=$_POST['telefono'];
$codigoPostal=$_POST['codigoPostal'];
$servicio=$_POST['servicio'];
$razonSocial=$_POST['razonSocial'];

$sql = "UPDATE formularioEmpresa SET fotoEmpresa = ?, descripcion = ?, ubicacion = ?, nit = ?, fechaFundacion = ?, telefono = ?, codigoPostal = ?, servicio = ?, razonSocial = ? WHERE empresa_id = ?";

$stmt = $conexion->prepare($sql);

$stmt->execute([$nombreFoto, $descripcion, $ubicacion, $nit, $fechaFundacion, $telefono, $codigoPostal, $servicio, $razonSocial, $id]);

//echo $stmt->rowCount() . " records UPDATED successfully";

if($stmt) {
  echo '<script>
            alert("Cambios guardados exitosamente.");
            window.location = "paginaPrincipalEmpresa.php"
          </script>';
}else{
  echo "error";
}

/*$cambio = $conexion->prepare("UPDATE formulariousu SET foto = ?, descripcion = ?, ciudad = ?,  departamento = ?, fechaNaci = ?, residencia = ?, sexo = ?, documento = ?, numDocumet = ?, nombreEmpresa = ?, fechaInicio = ?, fechaFinal = ?, cargo = ?, nomInstitu = ?, fechaInicial = ?, fechaFinalizacion = ?, certificados = ?, files = ?, lenguajes = ?, herramientas = ?  WHERE usuario_id = ?;");
$cambio->execute([$nombreFoto, $descripcion, $ciudad, $departamento, $fechaNaci, $residencia, $sexo, $documento, $numDocumet, $nombreEmpresa, $fechaInicio, $fechaFinal, $cargo, $nomInstitu, $fechainicial, $fechaFinalizacion, $certificados, $nombreCV, $lenguajes, $herramientas, $id]);

var_dump($cambio);

if($cambio === TRUE) {
    echo '<script>
              alert("Cambios guardados exitosamente.");
              window.location = "paginaPrincipalUsuario.php"
            </script>';
  }else{
    echo "error";
}*/

/*$id = $_SESSION["id_usuario"];
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
$herramientas= $_POST['herramientas'];*/


/*$sql = "UPDATE formulariousu SET foto = :foto, 
            descripcion = :descripcion, 
            ciudad = :ciudad,  
            departamento = :departamento,
            fechaNaci = :fechaNaci,
            residencia = :residencia,
            sexo = :sexo,
            documento = :documento,
            numDocumet = :numDocumet,
            nombreEmpresa = :nombreEmpresa,
            fechaInicio = :fechaInicio,
            fechaFinal = :fechaFinal,
            cargo = :cargo,
            nomInstitu = :nomInstitu,
            fechaInicial = :fechaInicial,
            fechaFinalizacion = :fechaFinalizacion,
            certificados = :certificados,
            files = :files,
            lenguajes = :lenguajes,
            herramientas = :herramientas  
            WHERE id = :id";

$stmt = $conexion->prepare($sql);                                  
$stmt->bindParam(':foto', $_POST['foto'], PDO::PARAM_STR);       
$stmt->bindParam(':descripcion', $_POST['$descripcion'], PDO::PARAM_STR);    
$stmt->bindParam(':ciudad', $_POST['ciudad'], PDO::PARAM_STR);
$stmt->bindParam(':departamento', $_POST['departamento'], PDO::PARAM_STR);
$stmt->bindParam(':fechaNaci', $_POST['fechaNaci'], PDO::PARAM_STR);
$stmt->bindParam(':residencia', $_POST['residencia'], PDO::PARAM_STR);
$stmt->bindParam(':sexo', $_POST['sexo'], PDO::PARAM_STR);
$stmt->bindParam(':documento', $_POST['documento'], PDO::PARAM_STR);
$stmt->bindParam(':numDocumet', $_POST['numDocumet'], PDO::PARAM_STR);
$stmt->bindParam(':nombreEmpresa', $_POST['nombreEmpresa'], PDO::PARAM_STR);
$stmt->bindParam(':fechaInicio', $_POST['fechaInicio'], PDO::PARAM_STR);
$stmt->bindParam(':fechaFinal', $_POST['fechaFinal'], PDO::PARAM_STR);
$stmt->bindParam(':cargo', $_POST['cargo'], PDO::PARAM_STR);
$stmt->bindParam(':nomInstitu', $_POST['nomInstitu'], PDO::PARAM_STR);
$stmt->bindParam(':fechaInicial', $_POST['fechaInicial'], PDO::PARAM_STR);
$stmt->bindParam(':fechaFinalizacion', $_POST['fechaFinalizacion'], PDO::PARAM_STR);
$stmt->bindParam(':certificados', $_POST['certificados'], PDO::PARAM_STR);
$stmt->bindParam(':files', $_POST['files'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':lenguajes', $_POST['lenguajes'], PDO::PARAM_STR); 
$stmt->bindParam(':herramientas', $_POST['herramientas'], PDO::PARAM_STR);   
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute(); 

var_dump($stmt);*/

/*if($stmt === TRUE) {
    echo '<script>
              alert("Cambios guardados exitosamente.");
              window.location = "paginaPrincipalUsuario.php"
            </script>';
  }else{
    echo "error";
  }*/

/*------------------------------------------------------------*/
/*$sentencia = $conexion->prepare("UPDATE formulariousu SET foto=?,descripcion=?,ciudad=?,departamento=?,fechaNaci=?,residencia=?,sexo=?,documento=?,numDocumet=?,telefono=?,nombreEmpresa=?,fechaInicio=?,fechaFinal=?,cargo=?,nomInstitu=?,fechaInicial=?,fechaFinalizacion=?,certificados=?,files=?,lenguajes=?,herramientas=? where id=?;");

$sentencia->bindParam('ssssssssddsddssddssssd', $nombreFoto,$descripcion,$ciudad, $departamento,$fechaNaci,$residencia,$sexo,$documento,$numDocumet,$telefono,$nombreEmpresa,$fechaInicio,$fechaFinal,$cargo,$nomInstitu,$fechainicial,$fechaFinalizacion,$certificados,$nombreCV,$lenguajes,$herramientas,$id);

/*$resultado = $sentencia->execute([$nombreFoto,$descripcion,$ciudad, $departamento,$fechaNaci,$residencia,$sexo,$documento,$numDocumet,$telefono,$nombreEmpresa,$fechaInicio,$fechaFinal,$cargo,$nomInstitu,$fechainicial,$fechaFinalizacion,$certificados,$nombreCV,$lenguajes,$herramientas,$id]);
*/
//var_dump($sentencia);

/*if($resultado === TRUE) {
		echo '<script>
        	    alert("Cambios guardados exitosamente.");
            	window.location = "paginaPrincipalUsuario.php"
          	</script>';
	}else{
		echo "eror";
	}*/
?>