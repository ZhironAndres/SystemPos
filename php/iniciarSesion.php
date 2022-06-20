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
    <main>
    <section class="popup-container">
        <div class="center">
            <button id="show-login">Iniciar Sesion</button>
        </div>
        <div class="popup">
            <div class="close-btn">&times;</div>
            <form class="form" method="post">
                <h2>Iniciar Sesion</h2>
                <div class="form-element">
                    <label for="email">Correo Electronico</label>
                    <input type="text" id="email" placeholder="Ingrese su email" required>
                </div>
                <div class="form-element">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" placeholder="Ingrese contraseña" required>
                </div>
                <div class="form-element">
                    <label for="remember-me" >Recuerdame</label>
                    <input type="checkbox" id="remember-me" required>
                </div>
                <div class="form-element">
                    <button>Ingresar</button>
                </div>
                <div class="form-element">
                    <a href="#">¿Olvido su contraseña?</a>
                </div>
                <div class="form-element">
                    <a href="empresaOUsuario.php">Crear Cuenta</a>
                </div>
            </form>
        </div>
    </section>
    
    </main>
    <script src="../JS/popup.js"></script>    
</body>
</html>