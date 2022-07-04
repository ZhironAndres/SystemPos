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
            <form id="formulario" action="registroEmpresa.php" class="form" method="post">
                <h2>Crear Cuenta</h2>
                <div class="form-element">
                    <label for="text">Empresa</label>
                    <input name="empresa" type="text" id="name" placeholder="Ingrese el nombre de la empresa" required>
                </div>
                <div class="form-element">
                    <label for="email">Correo Electronico</label>
                    <input name="correo" type="text" id="email" placeholder="Ingrese su email" required>
                </div>
                <div class="form-element">
                    <label for="password">Contraseña</label>
                    <input name="clave" type="password" id="password" placeholder="Ingrese contraseña" required>
                </div>
                <div class="form-element">
                    <label for="password">Confirmacion</label>
                    <input  type="password" id="confirmacion" placeholder="Ingrese nuevamente su contraseña" required>
                </div>
              
                <div class="form-element">
                    <button>Registrar</button>
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
    <script src="../JS/validationEmpresa.js"></script>
   
   
    
        
</body>
</html>