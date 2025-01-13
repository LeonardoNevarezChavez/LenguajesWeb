<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h2>Sesión cerrada.</h2>
        <br><br>
        
        <br><br>
        <span style="color:blue; font-size:20px;">
            Ir a la página: &nbsp;&nbsp;&nbsp;   
        <a href="login_main.php">Iniciar sesión</a>
        </span>
    </body>
</html>
