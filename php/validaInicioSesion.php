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
    $_SESSION['id_usuario'] = $datos->id;
    $consultaFormulario=$conexion->prepare("SELECT * FROM formulariousu WHERE usuario_id = ?");
    $consultaFormulario->execute([$datos->id]);
    $datosFormulario = $consultaFormulario->fetch(PDO::FETCH_OBJ);
if(empty($datosFormulario)){

    header("location: formularioUsuario.php");

  }
else{
  header("location: paginaPrincipalUsuario.php");
}
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
    $_SESSION['id_usuario'] = $datos->id;
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
    $_SESSION['id_usuario'] = $datos->id;
    header("location: admin.php");

  }
  
?>