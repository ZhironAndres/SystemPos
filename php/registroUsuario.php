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
   
    $sql="INSERT INTO usuario(nombres, apellidos, correo, contraseña) VALUES ('$nombre','$apellidos','$correo','$contraseña')";
    $consulta= "SELECT * FROM usuario WHERE correo='$correo'";
    $consultaDos ="SELECT * FROM empresa WHERE correo='$correo'";
    $sentenciaDos = $conexion->prepare($consultaDos);
    $sentenciaDos->execute();
    $resultadoDos=$sentenciaDos->fetchAll();     
    $sentencia=$conexion->prepare($consulta);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();

    if($sentencia->rowCount()>0 or $sentenciaDos->rowCount()>0){
      
    echo'
    <script>
    alert("Este correo ya ha sido utilizado, por favor intenta con otro");
    window.location="crearCuentaUsuario.php";
    </script>
    ';
    exit();


     
    }
    else{
      $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    header("location:formularioUsuario.php");
    }

    
 
 }
 




 
?>