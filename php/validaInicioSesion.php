<?php
  session_start();
  include "conexion.php";
  $correo = $_POST['correo'];
  $clave = $_POST['clave'];

  $sentencia = $conexion->prepare('select * from usuario where correo = ? and clave = ?;');
  
  $sentencia->execute([$correo, $clave]);
  $datos = $sentencia->fetch(PDO::FETCH_OBJ);
  //print_r($datos);

  if ($datos === FALSE) {

    echo '<script>
            alert("Correo o contraseña erronea. Intentelo nuevamente.");
            window.location = "iniciarSesion.php"
          </script>';

  }elseif ($sentencia->rowCount() == 1) {

    $_SESSION['correo'] = $datos->correo;
    header("location: formularioUsuario.php");

  }

  $sentencia = $conexion->prepare('select * from empresa where correo = ? and clave = ?;');
  
  $sentencia->execute([$correo, $clave]);
  $datos = $sentencia->fetch(PDO::FETCH_OBJ);
  
  //print_r($datos);
  
  if ($datos === FALSE) {

    echo '<script>
            alert("Correo o contraseña erronea. Intentelo nuevamente.");
            window.location = "iniciarSesion.php"
          </script>';

  }elseif ($sentencia->rowCount() == 1) {

    $_SESSION['correo'] = $datos->correo;
    header("location: formularioEmpresa.php");

  }

  $sentencia = $conexion->prepare('select * from admins where correo = ? and clave = ?;');
  
  $sentencia->execute([$correo, $clave]);
  $datos = $sentencia->fetch(PDO::FETCH_OBJ);
  
  print_r($datos);
  
  if ($datos === FALSE) {

    echo '<script>
            alert("Correo o contraseña erronea. Intentelo nuevamente.");
            window.location = "iniciarSesion.php"
          </script>';

  }elseif ($sentencia->rowCount() == 1) {

    $_SESSION['correo'] = $datos->correo;
    header("location: admin.php");

  } 
?>