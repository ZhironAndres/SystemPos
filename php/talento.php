<?php

include("conexion.php");

$sentencia = $conexion->query("select * from usuario");
$sentenciaDos = $conexion->query("select * from formulariousu");
$sentenciaDos->execute();
$info= $sentenciaDos->fetchAll();
  $sentencia->execute();
  $datos = $sentencia->fetchAll(PDO::FETCH_OBJ);

  print_r($info);
  
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
    <link rel="stylesheet" href="../CSS/talento.css">
</head>
<body>

    <header>
        <nav class="nav-tag">
            <div class="nav-logo">
                <img class="logo" src="../IMG/logo.jpeg" alt="Logo"></li>
            </div>
            <div class="container-list">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="paginaPrincipalEmpresa.php">Perfil</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="php/iniciarSesion.php">Buscar Talento</a></li>
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
           <section class="contenedor">
            <div class="buscador">
                <div class="conBuscador">
                <input type="search" name="busqueda" id="search" placeholder="Ingrese su busqueda, ejemplo:Desarrollador web" >
                 <i class="fa-solid fa-magnifying-glass"></i>
                 <input type="submit" value="Buscar" class="enviar">        
                </div>
            </div>
           </section>
           <section class="profileDisplay" >
            <section class="container">
            <?php foreach( $info as $inf){
                echo "<div class='card'>";
                echo "<div class='face face1'>";
                echo "<div class='content'>";
                echo "<img src='../IMG/$inf[foto]'>";
               echo"</div>";
               echo"</div>";
               echo"</div>";
            }

?>          
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../IMG/dev1.jpg" alt="">
                            <h3>Andres Morales</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quam quia corrupti et maiores aliquam necessitatibus cum alias magni voluptatum.</p>
                            <a id="open" href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                </section>


               <!-- <div class="Card">
                <div class="profileImage">
                    <img src="../IMG/dev2.jpg" alt="">
                </div>
                <div class="profileName">
                    <h3>Andres Morales</h3>
                    <p>Cargo</p>                    
                </div>
                <div class="profileDescription">
                    <p></p>
                </div>
                <div class="profileLenguajes">
                <p></p>
                </div>
                <div>

                </div>
                </div>-->
            
           </section>
        </section>
    </main>
    <footer></footer>
    <script src="../JS/loader2.js"></script>
</body>
</html>