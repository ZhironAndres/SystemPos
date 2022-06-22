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
    <title>FormularioUsuario</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>
<body style="background-image: url(cinco.png); background-repeat: no-repeat;background-size: cover "> <br> <br> 
  <form action="guardarInfoUsuario.php" method="POST" enctype="multipart/form-data">
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4"> 
            <div class="mb-4 d-flex justify-content-start align-items-center">
              
                <h4>  Completa tu perfil</h4>
            </div>
            <div> <h5><i class="bi bi-file-person-fill"></i> subir foto de perfil </h5>
                  <input type="file" name="foto">
             </div> <br>
             <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-person-check"></i> Breve descripcion de usted</label>
                           <textarea name="description" id="description" class="form-control" placeholder="Digite aquí lo que realizaba en esa empresa"></textarea>
                    </div>
            <div class="mb-1">

                    <div class="mb-4 d-flex justify-content-between"> 
                        <div>
                            <label for="ciudad"> <i class="bi bi-globe2"></i> Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder= "Ciudad de nacimiento" required>
                            
                        </div>
                        <div >
                            <label for="departamento"> <i class="bi bi-geo-alt"></i> Departamento</label>
                            <input type="text" class="form-control" name="departamento" id="departamento" placeholder= "Departamento de nacimiento" required>
                            
                        </div>
                    </div>
                 </div>


                    <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-calendar-date"></i> Fecha de nacimiento: </label>
                          <input type="date" name="fechaNaci" value="" min="1960-12-31" max="2100-12-31" class="form-control">
                    </div>

                    <!--<div>
                      <label for=""> <i class="bi bi-calendar-date"></i> Fecha Nacimiento</label>
                      <input type="text" class="form-control"  placeholder="Seleccione fecha de nacimienro" >
                    </div> <br>-->
                    <div class="mb-4">
                        <label for="residencia"><i class="bi bi-house"></i> Residencia</label>
                        <input type="text" class="form-control" name="residencia" id="residencia" placeholder= "Digite dirreccion de residencia" required>
                        
                    </div> 
                    <div class="mb-4">
                        <label for="sexo"><i class="bi bi-gender-ambiguous"></i> Sexo: </label>
                        <input type="radio" class="form-check-input"  name="sexo"  value="masculino" > Masculino
                        <input type="radio" class="form-check-input" name="sexo"  value="femenino" > Femenino
                        <div class="sexo text-danger"></div>
                    </div>  

                    <div class="mb-4 d-flex justify-content-between"> 

                      <div class="mb-3 content_select">
                         <label for="documento"> <i class="bi bi-credit-card-2-front"></i>  Tipo de documento</label>
                            <select name="documento" class="form-control">
                              <option selected> <i class="bi bi-credit-card-2-front"></i> Tipo de documento...</option>
                              <option value="cedula">Cédula de ciudadanía</option>
                              <option value="extranjero">Cédula de extranjería</option>
                            </select>
                        </div>

                        <div >
                            <label for="numDocumet"> <i class="bi bi-credit-card-2-front"></i>  Numero de documento</label>
                            <input type="text" class="form-control" name="numDocumet" id="numDocumet" placeholder= "Digite Numero de documento" required>
                            <div class="apellido text-danger"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="telefono"><i class="bi bi-phone"></i> teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder= "Digite su numero de teléfono" required>
                    </div> 

                    <h6 style="text-align: center;" ><i class="bi bi-briefcase"></i> Experiencia</h6>

                    

                    <div class="mb-3">
                      <h6>ㅤ</h6>
                        <input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder= "Nombre empresa" required>
                    </div>

                      <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-calendar-date"></i> Fecha inicio </label>
                          <input type="date" name="fechaInicio" value="" min="1960-12-31" max="2100-12-31" class="form-control">
                    </div>

                     <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-person-check"></i> Cargo que desempeñó</label>
                           <textarea name="cargo" id="cargo" class="form-control" placeholder="Digiete aquí lo que realizaba en esa empresa"></textarea>
                    </div>
                    <h6 style="text-align: center;" ><i class="bi bi-mortarboard-fill"></i> Estudios</h6>
                    <div>
                            <label for="nomInstitu"> <i class="bi bi-globe2"></i> Institucion</label>
                            <input type="text" class="form-control" name="nomInstitu" id="nomInstitu" placeholder= "Nombre de la institucion" required>
                            
                        </div>
                        <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-calendar-date"></i> Fecha inicio </label>
                          <input type="date" name="fechaInicial" value="" min="1960-12-31" max="2100-12-31" class="form-control">
                    </div>
                    <div class="mb-3">
                          <label class="form-label"> <i class="bi bi-calendar-date"></i> Fecha de finalizacion </label>
                          <input type="date" name="fechaFinalizacion" value="" min="1960-12-31" max="2100-12-31" class="form-control">
                    </div>

                    <label class="btn" for="my-file-selector">
                           <input type="file" name="certificados" id="certificados" multiple>
                          </label>
                          <h6 style="text-align: center;" ><i class="bi bi-mortarboard-fill"></i> Habilidades</h6>
                    <div>
                            <label for="lenguajes"> <i class="bi bi-globe2"></i> Lenguajes de programacion</label>
                            <input type="text" class="form-control" name="lenguajes" id="lenguajes" placeholder= "Lenguajes de programacion" required>
                            
                        </div>
                        <div>
                            <label for="herramientas"> <i class="bi bi-globe2"></i> Herramientas</label>
                            <input type="text" class="form-control" name="herramientas" id="herramientas"  placeholder= "Por favor indique que herramientas utiliza ejemplo: Github, Git" required>
                            
                        </div>
                    <div class="mb-3 content_select">
                          <label>Por favor, cargue a continuación la documentacion restante</label><br>
                          <ol>
                            <li>Hoja de vida</li>
                            <li>Certificado de bachiller</li>
                            <li>Certificados de estudios superiores</li>
                            <li>Certificados de cursos complementarios</li>
                            <li>Pruebas ICFES, Saber PRO, saber TYT</li>
                          </ol>

                          <label class="btn" for="my-file-selector">
                           <input type="file" name="files" id="exampleInputFile" multiple>
                          </label>
                      </div>
                    <!--<div class="mb-4">
                        <label for="mensaje"> <i class="bi bi-chat-right-dots-fill" required></i> Mensaje</label>
                        <textarea name="mensaje" id="mensaje" class="form-control" placeholder="ej: hola"></textarea>
                        <div class="mensaje text-danger"></div>
                    </div> -->
                    
                    <div class="mb-2">
                        
                          <center> <input type="submit" value="enviar" /> </center> 
                       
                    </div> 
                            
        </div>
    </section>
      </form>


</body>
</html>
