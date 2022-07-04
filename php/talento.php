<?php

include("conexion.php");

$wheresql= "";
$busqueda="";

if(isset($_POST["busqueda"]) && !empty($_POST["busqueda"])){
    $busqueda = $_POST["busqueda"];
    $wheresql = " where nombres like '%$busqueda%'  or apellidos like '%$busqueda%'  or cargo like '%$busqueda%'";
}

$sentencia= $conexion->query("select * from usuario u join formulariousu f on f.usuario_id = u.id $wheresql limit 20");


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
                
                <form action="talento.php" method="POST">
                <input type="search" name="busqueda" id="search" placeholder="Ingrese su busqueda, ejemplo:Desarrollador web" >
                 <i class="fa-solid fa-magnifying-glass"></i>
                 <input type="submit" value="Buscar" class="enviar"> 
                </form>    
                </div>
                <?php
                 if($busqueda){
                    echo "<div style='display:flex;width:100%;height:200px;align-items:center;justify-content:center'>";                   
                    echo "<h3 style='text-align:center; font-size:2rem;'>Los resultados del termino: '$busqueda'</h3>";
                    echo" </div>";
                }
                ?>
            </div>
           </section>
           <section class="profileDisplay">
            <section class="container">
          <?php 
          $contador = 0;

       
          



          while($datos = $sentencia->fetch(PDO::FETCH_OBJ)){ 

              echo "<section class='container'>";
              echo "<div class='card'>";
              echo "<div class='face face1'>";
              echo "<div class='content'>";
              echo "<img src='../archivos/". $datos->foto ."'>";
              echo "<h3>$datos->nombres $datos->apellidos</h3>";
              echo"</div>";
               echo"</div>";
               echo"<div class='face face2'>";
               echo "<div class='content'>";
               echo "<p>$datos->descripcion</p>";
               echo"<a id='open$contador' href='#'>Ver más</a>";
               echo"</div>";
               echo"</div>";
               echo"</div>";
               echo"</section>";
               echo "<section class='modal-container' id='modal_container$contador'>";
               echo "<div class='modal'>";
               echo "<div id='close$contador' class='close-btn'>&times</div>";
               echo"<div class='modalcard'>";
               echo"<img src='../archivos/$datos->foto' alt='profile people' style='width:100%'>";
               echo "<h3 class='cardtitle'>$datos->nombres $datos->apellidos</h3>";
               echo"<p>$datos->cargo</p>";
                echo"<p>$datos->telefono</p>";
                echo"<p>$datos->lenguajes</p>";
                echo"<p>$datos->herramientas</p>";
                echo"<p><button><a style='text-decoration:none; color:white;' href='../mensajeriaSystemPos/vistas/login.php'>Mensaje</a></button></p>";
                echo"</div>";
                echo"</div>";
                echo"</section>";

                
                echo"<script>
                    const open$contador = document.getElementById('open$contador');
                    const modal_container$contador= document.getElementById('modal_container$contador');
                    const close$contador = document.getElementById('close$contador');
                    

                    open$contador.addEventListener('click', abrir$contador);
                    close$contador.addEventListener('click', cerrar$contador);
                    function abrir$contador(){
                        modal_container$contador.classList.add('show')
                    }

                    function cerrar$contador(){
                        modal_container$contador.classList.remove('show')
                    }
                    
                    

                    
                </script>";

            $contador++;
            }
            
         
          ?>                  
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
     <!-- <script src="../JS/loader2.js"></script>-->
    
</body>
</html>