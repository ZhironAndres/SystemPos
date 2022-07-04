<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/chat.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e9c2883c48.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="IMG/logo.jpeg">
    <title>Chat SystemPos</title>
</head>
<body>
  <main>
               <div id="contenedor">
                <div id="caja-chat">
                  <div id="chat">
                   <div id="datos-chat">
                    <span style="color:#1c62c4;" >Nombre de la empresa</span>
                    <span style="color:#848484;">Hola, como estas?</span>
                    <span style="float: right;">10:04 am</span>

                   </div> 
                  </div> 
                </div>
                <form action="chat.php" method="post">
                    <input type="text" name="nombre" placeholder="Ingrese su nombre">
                    <textarea name="mensaje" id="" placeholder="Ingrese tu mensaje" cols="30" rows="10"></textarea>
                    <input type="submit" name="enviar" value="enviar">
                </form>
            </div>
      
  </main>  
</body>
</html>