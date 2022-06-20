
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
    $consulta= "SELECT * FROM empresa WHERE correo='$correo'";
    $consultaDos ="SELECT * FROM usuario WHERE correo='$correo'";
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
    window.location="crearCuentaEmpresa.php";
    </script>
    ';
    exit();     
    }
    else{
      $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
     header("location:formularioEmpresa.php");
    }
    
    
   
 
   
  
 
 }
 
 


  