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

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioEmpresa</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>
<body style="background-image: url(cinco.png); background-repeat: no-repeat;background-size: cover "> <br> <br> <br> 

    <form action="guardarInfoEmpresa.php" method="POST" enctype="multipart/form-data">
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4"> 
            <div class="mb-4 d-flex justify-content-start align-items-center">
              
                <h4>Perfil Empresa</h4>
            </div>
            

            <div> <h5><i class="bi bi-camera"></i> subir logo empresa </h5>
                  <input type="file" name="fotoEmpresa">
             </div> <br>

             <div class="mb-4">
                <label for="servicio"><i class="bi bi-person-check"></i> ¿Pequeña descripcion de la empresa? </label>
                <textarea name="descripcionEmpresa" id="descripcionEmpresa" class="form-control" placeholder="Digiete aquí una pequeña descripcion de la empresa"></textarea>
                        
            </div>
            <div class="mb-4">
                <label for="telefono"><i class="bi bi-phone"></i> Nit de la empresa</label>
                <input type="text" class="form-control" name="nit" id="nit" placeholder= "Digite el nit de la empresa" required>   
            </div>

            <div class="mb-4">
                <label for="ubicacion"><i class="bi bi-geo-alt-fill"></i> ubicacion</label>
                <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder= "ubicacion de la empresa" required>
                <div class="correo text-danger"></div>
            </div> 

            <div>

                <label class="form-label"> <i class="bi bi-calendar-date"></i> Año de fundacion </label>
                <input type="date" name="fechaFundacion" value="" min="1960-12-31" max="2100-12-31" class="form-control">
                      
            </div> <br>

            <div class="mb-4">
                <label for="telefono"><i class="bi bi-phone"></i> teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder= "Digite su numero de teléfono" required>   
            </div>

            <div class="mb-4">
                <label for="telefono"><i class="bi bi-phone"></i> Codigo Postal</label>
                <input type="text" class="form-control" name="codigoPostal" id="telefono" placeholder= "Digite su numero de Codigo Postal" required>    
            </div>

            <div class="mb-4">
                <label for="servicio"><i class="bi bi-person-check"></i> ¿Que servicio ofrecen? </label>
                <textarea name="servicio" id="servicio" class="form-control" placeholder="Digiete aquí los servivios que ofrece la empresa"></textarea>
                        
            </div>
            <div class="mb-4">
                <label for="servicio"><i class="bi bi-person-check"></i> Razon social </label>
                <textarea name="razonSocial" id="razonSocial" class="form-control" placeholder="Digiete aquí los servivios que ofrece la empresa"></textarea>
                        
            </div>

                    
                    <div class="mb-2">
                        
                        <center> <input type="submit" value="enviar" /> </center> 
                       
                    </div> 
                              
            </div>
        </section>
    </form>
</body>
</html>