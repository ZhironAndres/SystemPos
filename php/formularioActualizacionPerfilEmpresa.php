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


/*if(!isset($_GET["id"])) exit();
$id = $_GET["id"];*/
$correo = $_SESSION['correo'];
$idUsuario= $_SESSION["empresa_id"];
$sentencia = $conexion->query("select * from formularioempresa where empresa_id = '$idUsuario'");
$sentenciaDos = $conexion->query("select * from empresa where id = '$idUsuario'");
$sentenciaDos->execute();
$info= $sentenciaDos->fetchAll();
  $sentencia->execute();
  $datos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioUsuario</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>
<body style="background-image: url(cinco.png); background-repeat: no-repeat;background-size: cover "><br><br> 
    <form action="actualizarPerfilEmpresa.php" method="POST" enctype="multipart/form-data">
        <section class="d-flex justify-content-center align-items-center">
            <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4"> 
                <div class="mb-4 d-flex justify-content-start align-items-center">
                    <h4>Actualice El Perfíl De Su Empresa</h4>
                </div>
                <?php foreach($datos as $dato){ ?>
                <div> 
                    <h5><i class="bi bi-file-person-fill"></i> Foto de Perfíl </h5>
                    <input  type="file" name="fotoEmpresa">
                </div> <br>
            
                <div class="mb-1">
                    <label class="form-label"> <i class="bi bi-person-check"></i> Breve Descripcion</label>
                    <textarea value="<?php echo $dato->descripcion; ?>" name="description" id="description" class="form-control" placeholder="Describa las actividades que realiza su empresa..."></textarea>
                </div><br>

                <div class="mb-4"> 
                    <div>
                        <label for="ubicacion"> <i class="bi bi-globe2"></i> Ubicación</label>
                        <input value="<?php echo $dato->ubicacion?>" type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder= "Ubicación de la empresa" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="nit"> <i class="bi bi-credit-card-2-front"></i>  NIT</label>
                    <input value= "<?php echo $dato->nit?>" type="text" class="form-control" name="nit" id="nit" placeholder= "Digite NIT de la empresa" required>
                    <div class="apellido text-danger"></div>
                </div>

                <div class="mb-4">
                    <label class="form-label"> <i class="bi bi-calendar-date"></i> Fecha de Fundación: </label>
                    <input type="date" name="fechaFundacion" value="<?php echo $dato->fechaFundacion; ?>" min="1930-12-31" max="2100-12-31" class="form-control">
                </div>

                <div class="mb-4">
                    <label for="telefono"><i class="bi bi-phone"></i> Teléfono</label>
                    <input value="<?php echo $dato->telefono?>" type="text" class="form-control" name="telefono" id="telefono" placeholder= "Digite su numero de teléfono" required>
                </div> 

                <div class="mb-4">
                    <label for="codigoPostal"><i class="bi bi-globe2"></i> Codigo Postal</label>
                    <input value="<?php echo $dato->codigoPostal?>" type="text" class="form-control" name="codigoPostal" id="codigoPostal" placeholder= "Digite el codigo postal..." required>
                </div> 

                <div class="mb-4">
                    <label class="form-label"> <i class="bi bi-person-check"></i> Servicio</label>
                    <textarea value="<?php echo $dato->servicio; ?>" name="servicio" id="description" class="form-control" placeholder="Describa los servicios que ofrece su empresa..."></textarea>
                </div>

                <div class="mb-4">
                    <label for="nit"> <i class="bi bi-credit-card-2-front"></i>  Razón Social</label>
                    <input  value="<?php echo $dato->razonSocial; } ?>" type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Razón social..." required>
                </div>  

                <div class="mb-4">
                    <center><input type="submit" value="enviar"/></center>   
                </div> 
            </div>
        </section>
    </form>
</body>
</html>
