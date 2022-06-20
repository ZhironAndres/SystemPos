<?php
  include "conexion.php";
  $nombre="";
  $apellidos="";
  $correo="";
  $contrseña="";
 
  if($_POST){
    $conexion= new PDO("mysql:host=$servidor;dbname=system",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $nombre= (isset($_POST["nombres"]))?$_POST["nombres"]:"";
    $apellidos= (isset($_POST["apellidos"]))?$_POST["apellidos"]:"";
    $correo= (isset($_POST["correo"]))?$_POST["correo"]:"";
    $contraseña= (isset($_POST["contrasenia"]))?$_POST["contrasenia"]:"";
   
    $sql="INSERT INTO usuario(nombres, apellidos, correo, clave) VALUES ('$nombre','$apellidos','$correo','$contraseña')";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    

    header("location:formularioUsuario.php");   
   
 
 }
 

 




 
?>