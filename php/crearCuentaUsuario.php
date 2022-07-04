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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Iniciar Sesion</title>
</head>
<body>

    <div>
        <a href="empresaOUsuario.php"><i class='fas back'>&#xf0a8;</i></a>
    </div>
    <main>
    <section class="popup-container">
        <div class="center">
            <button id="show-login">Crear cuenta</button>
        </div>
        <div class="popup">
            <div class="close-btn">&times;</div>
            <form action="registroUsuario.php"  class="form"  id="formulario" method="post">
                <h2>Crear Cuenta</h2>
                <div class="form-element">
                    <label for="text">Nombres</label>
                    <input type="text" name="nombres" id="name" placeholder="Ingrese sus nombres" required>
                </div>
                <div class="form-element">
                    <label for="text">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
                </div>
                <div class="form-element">
                    <label for="email">Correo Electronico</label>
                    <input type="text" name="correo" id="email" placeholder="Ingrese su email" required>
                </div>
                <div class="form-element">
                    <label for="password">Contraseña</label>
                    <input type="password" name="contrasenia" id="password" placeholder="Ingrese contraseña" required>
                </div>
                <div class="form-element">
                    <label for="password">Confirmacion</label>
                    <input type="password" id="confirmacion" placeholder="Confirmacion" requiredIngrese nuevamente su contraseña" required>
                    
                </div>
              
                <div class="form-element">
                    <button >Registrar</button>
                    <p id="error"></p>
                </div>
                <div class="form-element">
                    <a href="iniciarSesion.php">¿Ya tiene cuenta? Ingrese Aqui</a>
                </div>
            </form>
        </div>
    </section>
    
    </main>
    <script src="../JS/popup.js"></script>
    <script src="../JS/validation.js"></script>    
</body>
</html>