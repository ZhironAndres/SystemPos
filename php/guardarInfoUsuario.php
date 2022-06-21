<?php


include ('conexion.php');
session_start();
	$carpetaArchivos = $_SERVER["DOCUMENT_ROOT"]."/SystemPos/archivos/";
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
	$cargo=$_POST['cargo'];
	$nombreFoto = basename($_FILES["foto"]["name"]);
	$nombreCV = basename($_FILES["files"]["name"]);

	//cargue foto
	$archivo = $carpetaArchivos . basename($_FILES["foto"]["name"]);
	$exito = 1;
	$extension = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false) {
	  echo $check["mime"];
	  $exito = 1;
	} else {
	  echo "por favor seleccione una imagen valida";
	  $exito = 0;
	}

	if (file_exists($archivo)) {
		echo "la imagen ya existe";
		$exito = 0;
  	}

	if ($_FILES["foto"]["size"] > 500000) {
		echo "imagen muy pesada";
		$exito = 0;
  	}

	if($extension != "jpg" && $extension != "png" && $extension != "jpeg"
	&& $extension != "gif" ) {
  		echo "formato de la imagen no es permitido";
  		$exito = 0;
	}

	if ($exito == 0) {
		echo "el archivo no se subio ";
  	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $archivo)) {
	  		echo "imagen cargada ";
		} else {
	  		echo "error al subir el ";
		}
  	}

	//subir hoja de vida, documentacion 
	$archivo_cv = $carpetaArchivos . basename($_FILES["files"]["name"]);
	$exito_cv = 1;
	$extension_cv = strtolower(pathinfo($archivo_cv,PATHINFO_EXTENSION));

	if (file_exists($archivo_cv)) {
		echo "la imagen ya existe ";
		$exito_cv = 0;
  	}

	  if ($_FILES["files"]["size"] > 500000) {
		echo " el archivo es muy pesado";
		$exito_cv = 0;
  	}

	  if (file_exists($archivo_cv)) {
		echo "la imagen ya existe";
		$exito_cv = 0;
  	}

	if ($exito_cv == 0) {
		echo "el archivo no se subio";
  	} else {
		if (move_uploaded_file($_FILES["files"]["tmp_name"], $archivo_cv)) {
	  		echo "hoja de vida cargada exitosamente";
		} else {
	  		echo "error al subir cv ";
		}
  	}

	$consulta=$conexion->prepare("INSERT INTO formulariousu(foto,ciudad,departamento,fechaNaci,residencia,sexo,documento,numDocumet,telefono,nombreEmpresa,fechaInicio,cargo,files,usuario_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $idUsuario= $_SESSION["id_usuario"];
	$consulta->bindParam(1,$nombreFoto);
	$consulta->bindParam(2,$ciudad);
	$consulta->bindParam(3,$departamento);
	$consulta->bindParam(4,$fechaNaci);
	$consulta->bindParam(5,$residencia);
	$consulta->bindParam(6,$sexo);
	$consulta->bindParam(7,$documento);
	$consulta->bindParam(8,$numDocumet);
	$consulta->bindParam(9,$telefono);
	$consulta->bindParam(10,$nombreEmpresa);
	$consulta->bindParam(11,$fechaInicio);
	$consulta->bindParam(12,$cargo);
	$consulta->bindParam(13,$nombreCV);
	$consulta->bindParam(14,$idUsuario);


	if($consulta->execute()){
		echo "Datos almacenados";
		header("Location:paginaPrincipalUsuario.php");
	}else{
		echo "Error no se pudo almacenar los datos";
		header("Location:formularioUsuario.php");
	}

	?>