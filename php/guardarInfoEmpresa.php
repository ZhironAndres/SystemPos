<?php
include ('conexion.php');

	$fotoEmpresa=$_POST['fotoEmpresa'];
	$ubicacion=$_POST['ubicacion'];
	$fechaFundacion=$_POST['fechaFundacion'];
	$telefono=$_POST['telefono'];
	$servicio=$_POST['servicio'];


	$consulta=$conexion->prepare("INSERT INTO formularioempresa(fotoEmpresa,ubicacion,fechaFundacion,telefono,servicio) VALUES(?,?,?,?,?)");

	$consulta->bindParam(1,$fotoEmpresa);
	$consulta->bindParam(2,$ubicacion);
	$consulta->bindParam(3,$fechaFundacion);
	$consulta->bindParam(4,$telefono);
	$consulta->bindParam(5,$servicio);


	if($consulta->execute()){
		echo "Datos almacenados";
	}else{
		echo "Error no se pudo almacenar los datos";
	}