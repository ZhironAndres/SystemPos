<?php
session_start();
include("conexion.php");

$correo = $_SESSION['correo'];
$idEmpresa= $_SESSION["empresa_id"];
$sentencia = $conexion->query("select * from formularioempresa where empresa_id = '$idEmpresa'");
$sentenciaDos = $conexion->query("select * from empresa where id = '$idEmpresa'");
$sentenciaDos->execute();
$info= $sentenciaDos->fetchAll();
$sentencia->execute();
$datos = $sentencia->fetchAll(PDO::FETCH_OBJ);

  
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
    <link rel="stylesheet" href="../CSS/profileCompany.css">
</head>
<body>
<div class="loader">
        <img src="../IMG/loader.gif" alt="">
    </div>
    <header>
        <nav class="nav-tag">
            <div class="nav-logo">
                <img class="logo" src="../IMG/logo.jpeg" alt="Logo"></li>
            </div>
            <div class="container-list">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="talento.php">Buscar Talento</a></li>
                    <li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a></li>
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
                    <div class="imageContainer">
                        <div class="imageBox">
                            <img src="../IMG/logoEmpresa.png" alt="Imagen correspondiente a la Empresa">
                        </div>
                    </div>
                    <?php foreach ($info as $inf){  ?>
                    <div class="bienvenidaUsuario">
                    <div class="nombre"><h4><?php echo $inf["empresa"]; }?></h4></div>  
                    </div>
                    <div class="littleDescription">
                        <?php foreach($datos as$dato){?> 
                    <h4>Descripcion</h4>                    
                    <div>                   
                        <p><?php echo $dato->descripcion?></p>
                        </div>                        
                    </div>
                    <div class="datosPersonales">
                    <div class="info">
                        <h4>Datos de la Empresa</h4>
                       <div>    
                        
                        <div class="datos"> <p>Fecha de creacion:    <span><?php echo $dato->fechaFundacion?></p> </div>
                        
                       <div class="datos"> <p>No. Nit:  <span><?php echo $dato->nit?></span></p> </div>                     
                    <div class="datos"> <p>Telefono:  <span><?php echo $dato->telefono?></span></p> </div>
                    <div class="datos"> <p>Codigo Postal:  <span><?php echo $dato->codigoPostal?></span></p> </div>  
                    <div class="datos"> <p>Correo:   <span><?php echo $correo;?></span></p> </div>                    
                    <div class="datos"> <p>Direccion:   <span><?php echo $dato->ubicacion?></span></p> </div> 
                    <div class="datos"> <p>Razon Social:  <span><?php echo $dato->razonSocial; }?></span></p> </div>
                       </div>     
                    </div>
                    </div>
                    <div class="botonActualizar">
                        <button><a href="formularioActualizacionPerfilEmpresa.php">Actualizar datos </a> <i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>
            </section>
            <!-- <section class="infoDisplay">
               <div class="information">
                    <div class="titulo"> <h5>Experiencia laboral <i class="fa-solid fa-briefcase"></i></h5></div>
                    <div class="campos"><p>Nombre de la empresa: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Nombre de finalizacion: <span>Ecopetrol</span></p></div>
                    <div class= "certify">                        
                        <p>Certificados:</p>
                    </div>
                    <div class= "files">
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                    <div class="titulo"> <h5>Estudios <i class="fa-solid fa-graduation-cap"></i></h5></div>
                    <div class="campos"><p>Nombre de la institucion: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span>01-05-2002</span></p></div>
                    <div class="campos"><p>Fecha de finalizacion: <span>08-12-2010</span></p></div>
                    <div class= "certify">                        
                        <p>Certificados:</p>
                    </div>
                    <div class= "files">
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                    <div class="titulo"> <h5>Habilidades y Herramientas <i class="fa-solid fa-screwdriver-wrench"></i></h5></div>
                    <div class="campos"><p>Cargo: <span>Desarrollador Movil</span></p></div>
                    <div class="campos"><p>Lenguajes de Programacion: <span>Flutter, Dart</span></p></div>
                    <div class="campos"><p>Otros: <span>Git, Github</span></p></div>
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
                        <button><a href="#">Actualizar datos </a> <i class="fa-solid fa-pen-to-square"></i></button>
                </div>
                </div>
            </section>-->
        </section>
    </main>
    <footer></footer>
    <script src="../JS/loader2.js"></script>
</body>
</html>