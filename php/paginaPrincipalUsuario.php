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
                    <li class="nav-item"><a class="nav-link" href="#Nosotros">Nosotros <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Mision</a></li>
                            <li><a href="#">Vision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="php/iniciarSesion.php">Iniciar <span></span> Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contacto">Contacto</a></li>
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
                            <img src="../IMG/dev2.jpg" alt="Imagen correspondiente al desarrollador">
                        </div>
                    </div>
                    <div class="bienvenidaUsuario">
                    <div class="nombre"><h4>Andres Morales</h4></div>  
                    </div>
                    <div class="littleDescription"> 
                    <h4>Descripcion</h4>                    
                    <div>                   
                        <p>Soy un ingeniero de sistemas con mas de 10 años de experiencia en desarrollo de aplicaciones moviles</p>
                        </div>                        
                    </div>
                    <div class="datosPersonales">
                    <div class="info">
                        <h4>Datos Personales</h4>
                       <div>    
                        <div class="datos"> <p>Ciudad de Nacimiento: <span>Cartagena de Indias</span> </p></div>
                        <div class="datos"> <p>Departamento: <span>Bolivar</span></p> </div>
                        <div class="datos"> <p>Fecha de nacimiento:    <span>1998 - 06 -20</span></p> </div>
                        <div class="datos"> <p>Tipo de Documento:   <span>Cedula</span></p> </div>
                       <div class="datos"> <p>No. Documento:  <span>47896560212</span></p> </div>
                       <div class="datos"> <p>Genero:   <span>Masculino</span></p> </div>
                    <div class="datos"> <p>Telefono:  <span>301145454</span></p> </div>                    
                    <div class="datos"> <p>Direccion:   <span>Nelson mandela sector tal</span></p> </div> 
                       </div>     
                    </div>
                    </div>
                    <div class="botonActualizar">
                        <button><a href="#">Actualizar datos </a> <i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>
            </section>
            <section class="infoDisplay">
                <div class="information">
                    <div class="titulo"> <h5>Experiencia laboral <i class="fa-solid fa-briefcase"></i></h5></div>
                    <div class="campos"><p>Nombre de la empresa: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Nombre de finalizacion: <span>Ecopetrol</span></p></div>
                    <div>                        
                        <p>Certificados</p>
                    </div>
                    <div >
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information">
                    <div class="titulo"> <h5>Estudios <i class="fa-solid fa-graduation-cap"></i></h5></div>
                    <div class="campos"><p>Nombre de la institucion: <span>Ecopetrol</span></p></div>
                    <div class="campos"><p>Fecha de inicio: <span>01-05-2002</span></p></div>
                    <div class="campos"><p>Fecha de finalizacion: <span>08-12-2010</span></p></div>
                    <div>                        
                        <p>Certificados</p>
                    </div>
                    <div>
                        <p>Agregar certificado</p>
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="information"></div>
            </section>
        </section>
    </main>
    <footer></footer>
    <script src="../JS/loader2.js"></script>
</body>
</html>