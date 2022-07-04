<?php
include ('conexion.php');
session_start();
$carpetaArchivos = $_SERVER["DOCUMENT_ROOT"] . "/SystemPos/archivos/" ;
	$idEmpresa= $_SESSION['empresa_id'];
	$fotoEmpresa= basename($_FILES["fotoEmpresa"]["name"]);
	$descripcionEmpresa=$_POST['descripcionEmpresa'];
	$ubicacion= $_POST['ubicacion'];
	$nit= $_POST['nit'];	
	$fechaFundacion= $_POST['fechaFundacion'];
	$telefono= $_POST['telefono'];
	$codigoPostal= $_POST['codigoPostal'];
	$servicio= $_POST['servicio'];
	$razonSocial= $_POST['razonSocial'];
	$archivo = $carpetaArchivos . basename($_FILES["fotoEmpresa"]["name"]);
	$exito = 1;
	$extension = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fotoEmpresa"]["tmp_name"]);
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

	if ($_FILES["fotoEmpresa"]["size"] > 500000) {
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
		if (move_uploaded_file($_FILES["fotoEmpresa"]["tmp_name"], $archivo)) {
	  		echo "imagen cargada ";
		} else {
	  		echo "error al subir el ";
		}
  	}
	
	$consulta=$conexion->prepare("INSERT INTO formularioempresa(empresa_id,fotoEmpresa,descripcion,ubicacion,nit,fechaFundacion,telefono,codigoPostal,servicio,razonSocial) VALUES(?,?,?,?,?,?,?,?,?,?)");
	$consulta->bindParam(1,$idEmpresa);
	$consulta->bindParam(2,$fotoEmpresa);
	$consulta->bindParam(3,$descripcionEmpresa);
	$consulta->bindParam(4,$ubicacion);
	$consulta->bindParam(5,$nit);
	$consulta->bindParam(6,$fechaFundacion);
	$consulta->bindParam(7,$telefono);
	$consulta->bindParam(8,$codigoPostal);
	$consulta->bindParam(9,$servicio);
	$consulta->bindParam(10,$razonSocial);

	if($consulta->execute()){
		echo "Datos almacenados";
		header("Location: paginaPrincipalEmpresa.php");
	}else{
		echo "Error no se pudo almacenar los datos";
	}