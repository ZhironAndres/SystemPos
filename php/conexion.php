<?php
$servidor= "localhost";
$usuario="root";
$contrasenia="";
$nameBd ="system";

try{
 $conexion= new PDO("mysql:host=$servidor;dbname=system",$usuario,$contrasenia);
 $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}
catch(PDOException $error){
echo "Conexion Erronea".$error;
echo $error->getMessage();
}

?>