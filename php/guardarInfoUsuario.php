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
	$nomInstitu=$_POST['nomInstitu'];
	$fechainicial=$_POST['fechaInicial'];
	$fechaFinalizacion=$_POST['fechaFinalizacion'];
	$certificados=basename($_FILES["certificados"]["name"]);
	$nombreFoto = basename($_FILES["foto"]["name"]);
	$descripcion=$_POST['description'];
	$nombreCV = basename($_FILES["files"]["name"]);
	$lenguajes= $_POST['lenguajes'];
	$herramientas= $_POST['herramientas'];

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


	// ULTIMA FOTO
	$archivo_cv = $carpetaArchivos . basename($_FILES["certificados"]["name"]);
	$exito_cv = 1;
	$extension_cv = strtolower(pathinfo($archivo_cv,PATHINFO_EXTENSION));

	if (file_exists($archivo_cv)) {
		echo "la imagen ya existe ";
		$exito_cv = 0;
  	}

	  if ($_FILES["certificados"]["size"] > 500000) {
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
		if (move_uploaded_file($_FILES["certificados"]["tmp_name"], $archivo_cv)) {
	  		echo "hoja de vida cargada exitosamente";
		} else {
	  		echo "error al subir cv ";
		}
  	}

	$consulta=$conexion->prepare("INSERT INTO formulariousu(foto,descripcion,ciudad,departamento,fechaNaci,residencia,sexo,documento,numDocumet,telefono,nombreEmpresa,fechaInicio,cargo,nomInstitu,fechaInicial,fechaFinalizacion,certificados,files,lenguajes,herramientas,usuario_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $idUsuario= $_SESSION["id_usuario"];
	$consulta->bindParam(1,$nombreFoto);
	$consulta->bindParam(2,$descripcion);
	$consulta->bindParam(3,$ciudad);
	$consulta->bindParam(4,$departamento);
	$consulta->bindParam(5,$fechaNaci);
	$consulta->bindParam(6,$residencia);
	$consulta->bindParam(7,$sexo);
	$consulta->bindParam(8,$documento);
	$consulta->bindParam(9,$numDocumet);
	$consulta->bindParam(10,$telefono);
	$consulta->bindParam(11,$nombreEmpresa);
	$consulta->bindParam(12,$fechaInicio);
	$consulta->bindParam(13,$cargo);
	$consulta->bindParam(14,$nomInstitu);
	$consulta->bindParam(15,$fechainicial);
	$consulta->bindParam(16,$fechaFinalizacion);
	$consulta->bindParam(17,$certificados);
	$consulta->bindParam(18,$nombreCV);
	$consulta->bindParam(19,$lenguajes);
	$consulta->bindParam(20,$herramientas); 
	$consulta->bindParam(21,$idUsuario);


	if($consulta->execute()){
		echo "Datos almacenados";
		header("Location:paginaPrincipalUsuario.php");
	}else{
		echo "Error no se pudo almacenar los datos";
		header("Location:formularioUsuario.php");
	}

	?>