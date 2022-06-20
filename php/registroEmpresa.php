<?php
  include "conexion.php";
  $empresa="";
  $correo="";
  $clave="";
 
  if($_POST){
    $conexion= new PDO("mysql:host=$servidor;dbname=system",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $empresa= (isset($_POST["empresa"]))?$_POST["empresa"]:"";
    $correo= (isset($_POST["correo"]))?$_POST["correo"]:"";
    $clave= (isset($_POST["clave"]))?$_POST["clave"]:"";
   
    $sql="INSERT INTO empresa(empresa, correo, clave) VALUES ('$empresa','$correo','$clave')";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();   
   
    if(!$resultado){     
      header("location: formularioEmpresa.php");
    }else{
      header("location: crearCuentaEmpresa.php");
    }
     
  
 
 }
 
 


  