<?php
session_start();
include("conexion.php");

$correo = $_SESSION['correo'];
$idUsuario= $_SESSION["id_usuario"];
$sentencia= $conexion->query("select * from usuario u join formulariousu f on f.usuario_id = u.id where u.id= '$idUsuario'");

  
    ?>
  






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SystemPos</title>
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e9c2883c48.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="../IMG/logo.jpeg">
    <link rel="stylesheet" href="../CSS/profileUser.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

    <header>
        <nav class="nav-tag">
            <div class="nav-logo">
                <img class="logo" src="../IMG/logo.jpeg" alt="Logo"></li>
            </div>
            <div class="container-list">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>                    
                    <li class="nav-item"><a class="nav-link" onClick="swal('Excelente!', 'Tu perfil ahora es publico!', 'success');" href="#">Publicar perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="../mensajeriaSystemPos/vistas/login.php">Revisar Mensajes</a></li>
                </ul>
            </div>
            <div class="hamburger">
               <span class="bar"></span> 
               <span class="bar"></span> 
               <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section class="display">
            <section class="profileDisplay">
        
                <div class="cardProfile">
                <?php while($datos = $sentencia->fetch(PDO::FETCH_OBJ)) {?>
                    <div class="imageContainer">
                        <div class="imageBox">
                            <img src="../archivos/<?php echo $datos->foto;?>" alt="Imagen correspondiente al desarrollador">
                        </div>
                    </div>                    
                    <div class="bienvenidaUsuario">
                    <div class="nombre"><h4><?php echo $datos->nombres." ".$datos->apellidos ?></h4></div>  
                    </div>
                    <div class="littleDescription"> 
                    <h4>Descripcion</h4>                                      
                    <div>                   
                        <p><?php echo $datos->descripcion ?></p>
                        </div>                        
                    </div>
                    <div class="datosPersonales">
                    <div class="info">
                    
                        <h4>Datos Personales</h4>
                       <div>    
                        <div class="datos"> <p>Ciudad de Nacimiento: <span><?php echo $datos->ciudad?></span> </p></div>
                        <div class="datos"> <p>Departamento: <span><?php echo $datos->departamento?></span></p> </div>
                        <div class="datos"> <p>Fecha de nacimiento:    <span><?php echo $datos->fechaNaci?></span></p> </div>
                        <div class="datos"> <p>Tipo de Documento:   <span><?php echo $datos->documento?></span></p> </div>
                       <div class="datos"> <p>No. Documento:  <span><?php echo $datos->numDocumet?></span></p> </div>
                       <div class="datos"> <p>Genero:   <span><?php echo $datos->sexo?></span></p> </div>
                    <div class="datos"> <p>Telefono:  <span><?php echo $datos->telefono?></span></p> </div>
                    <div class="datos"> <p>Direccion:   <span><?php echo $datos->residencia ?></span></p> </div> 
                    <div class="datos"> <p>Correo:   <span> <?php echo $datos->correo?></span></p> </div>                    
                       </div>     
                    </div>
                    </div>
                    <div class="botonActualizar">
                        <button><a href="formularioActualizacionPerfilUsuario.php">Actualizar datos </a> <i class="fa-solid fa-pen-to-square"></i></button>
                
                </div>
            </div>
            </section>
            <section class="infoDisplay">
    
                <div class="information">
                    <div class="titulo"> <h5>Experiencia laboral <i class="fa-solid fa-briefcase"></i></h5></div>
                    <div class="campos"><p>Nombre de la empresa: <span><?php echo $datos->nombreEmpresa?></span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span><?php echo $datos->fechaInicio?></span></p></div>
                    <div class="campos"><p>Cargo: <span><?php echo $datos->cargo; ?>l</span></p></div>
                    <div class="campos"><p>Fecha de finalizacion: <span><?php echo $datos->fechaFinal ?></span></p></div>
                    <div class= "certify">                        
                        <p>Certificados:</p>
                        <figcaption>                        
                            <img  src="../archivos/<?php echo $datos->files ?>" alt="">
                        </figcaption>
                    </div>
                    <div class= "files">
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                    <div class="titulo"> <h5>Estudios <i class="fa-solid fa-graduation-cap"></i></h5></div>
                    <div class="campos"><p>Nombre de la institucion: <span><?php echo $datos->nomInstitu ?></span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span><?php echo $datos->fechaInicial ?></span></p></div>
                    <div class="campos"><p>Fecha de finalizacion: <span><?php echo $datos->fechaFinalizacion ?></span></p></div>
                    <div class= "certify">                        
                    <p>Certificados:</p>
                        <figcaption>                        
                           <img src="../archivos/<?php echo $datos->certificados ?>" alt="">
                        </figcaption>
                    </div>
                    <div class= "files">
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                    <div class="titulo"> <h5>Habilidades y Herramientas <i class="fa-solid fa-screwdriver-wrench"></i></h5></div>
                    <div class="campos"><p>Lenguajes de Programacion: <span><?php echo $datos->lenguajes ?></span></p></div>
                    <div class="campos"><p>Otros: <span><?php echo $datos->herramientas;  } ?></span></p></div>
                    <div class= "certify">                        
                        <p>Certificados:</p>
                    </div>
                    <div class= "files">
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                <div class="buttonActualizar">
                        <button><a href="actualizarPerfilUsuario.php">Actualizar datos </a> <i class="fa-solid fa-pen-to-square"></i></button>
                </div>
                </div>
            </section>
        </section>
    
    <footer></footer>
    <!--<script src="../JS/loader2.js"></script>-->
</body>
</html>