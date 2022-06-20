<?php
  session_start();
  include "conexion.php";
  if (!isset($_SESSION['correo'])) {
    echo '<script>
            alert("Por favor inicie sesión.");
            window.location = "iniciarSesion.php"
          </script>';
    die();
    session_destroy();
  }

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizacion de datos</title>
	<!--HOJA DE ESTILOS-->
	<link rel="stylesheet" href="../CSS/formsActualizar.css">
	<!--GOOGLE FONTS-->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!--FONTAWESOME-->
	<script src="https://kit.fontawesome.com/e0d5e5037e.js" crossorigin="anonymous"></script>
	<!--BOOTSTRAP 5-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<!--ICONO PAGINA-->
    <link rel="shortcut icon" href="../IMG/logo.jpeg">
</head>
<body>

	<div class="container-fluid p-3"  >
        <a href="admin.php"><i class='fas fa-arrow-circle-left'></i></a>
    </div>

    <div class="container">
    	<div class="row"> 
        	<div class="container-form">
            	<?php
	            $sentencia = $conexion->prepare("SELECT * FROM usuario WHERE id = ?;");
				$sentencia->execute([$id]);
				$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
				if($resultado === FALSE){
					#No existe
					echo "¡No existe ese ID!";
					exit();
				}
	  			?>
				<form action="actualizarUsuario.php" method="POST">
	                <center><h3>Actualizar datos</h3></center><br>

	                <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">

	                <label class="form-label" for="nombres">Nombres</label>
	                <input class="form-control mb-4" value="<?php echo $resultado->nombres ?>" name="nombres" required type="text" id="nombres" placeholder="Digite sus nombre...">

	                <label class="form-label" for="apellidos">Apellidos</label><br>
	                <input class="form-control mb-4" value="<?php echo $resultado->apellidos ?>" name="apellidos" required type="text" id="apellidos" placeholder="Digite sus apellidos...">

	                <label class="form-label" for="correo">Correo Electronico</label><br>
	                <input class="form-control mb-4" value="<?php echo $resultado->correo ?>" name="correo" required type="text" id="correo" placeholder="Digite su correo...">

	                <label class="form-label" for="clave">Contraseña</label><br>
	                <input class="form-control mb-5" value="<?php echo $resultado->clave ?>" name="clave" required type="password" id="clave" placeholder="Digite su clave...">

	                <input class="button" type="submit" value="Guardar"><br><br>
	            </form>
	        </center>            
        </div>
	</div>
</body>
</html>