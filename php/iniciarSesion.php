<?php

    session_start();
    include_once("conexion.php");
    if (isset($_SESSION['correo'])) {
        $correo = $_SESSION['correo'];

        $query = $conexion->prepare('select * from usuario where correo= ?');
        $query->execute([$correo]);

        $emailExistencia = $query->fetchColumn();

        if ($emailExistencia > 0) {
            header("location: perfilPersona.php");

        }else{
            $query = $conexion->prepare('select * from empresa where correo= ?');
            $query->execute([$correo]);

            $emailExistencia = $query->fetchColumn();

            if ($emailExistencia > 0) {

                header("location: perfilEmpresa.php");
            
            }
        }        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/logo.jpeg">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e9c2883c48.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/iniciarSesion.css">
    
    <title>Iniciar Sesion</title>
</head>
<body>
    <main>
    <section class="popup-container">
        <div class="center">
            <button id="show-login">Iniciar Sesion</button>
        </div>
        <div class="popup">
            <div class="close-btn">&times;</div>
            <form class="form" action="validaInicioSesion.php" method="post">
                <h2>Iniciar Sesion</h2>
                <div class="form-element">
                    <label for="email">Correo Electronico</label>
                    <input name="correo" type="text" id="email" placeholder="Ingrese su email" required>
                </div>
                <div class="form-element">
                    <label for="password">Contraseña</label>
                    <input name="clave" type="password" id="password" placeholder="Ingrese contraseña" required>
                </div>
                <div class="form-element">
                    <label for="remember-me" >Recuerdame</label>
                    <input name="recuerdame" type="checkbox" id="remember-me">
                </div>
                <div class="form-element">
                    <button>Ingresar</button>
                </div>
                <div class="form-element">
                    <a href="#modal_container" id="open">¿Olvido su contraseña?</a>
                </div>
                <div class="form-element">
                    <a href="empresaOUsuario.php">Crear Cuenta</a>
                </div>
            </form>
        </div>
    </section>


    <div id="modal_container" class="modal-container">
      <div class="modal">
        <div class="close-btn">&times;</div>
        <form action="actualizar_clave.php" method="POST">
            <h2>Actualizar contraseña</h2><br>
            <div class="form-element">
                <label for="email">Correo Electronico</label><br>
                <input name="correo" type="text" id="email" placeholder="Ingrese su email" required>
            </div><br>
            <div class="form-element">
                <label for="password">Nueva Contraseña</label><br>
                <input name="clave" type="password" id="password" placeholder="Ingrese nueva contraseña" required>
            </div><br>
            <div class="form-element">
                <label for="password">Confirmar Contraseña</label><br>
                <input name="clave1" type="password" id="password" placeholder="Confirme contraseña" required>
            </div><br>

            <button type="submit" class="btn btn-primary" name="enviar">Actualizar</button>
        </form>
      </div>
    </div>
    
    </main>
    <script src="../JS/popup.js"></script>
    <script src="../JS/actualizar_clave.js"></script>
</body>
</html>