<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html lang="es">
    <head>
        <title>Contreseña cambiada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h3>Contraseña cambiada y sesión cerrada.</h3>
        <br><br>
        <br><br>
        <span style="color:blue; font-size:20px">
            Contraseña cambiada correctamente...
            <br><br>
            Su sesión ha sido cerrada.
            <br><br>
            Ir a la página: &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login_main.php">Iniciar sesión</a>
    </body>
</html>
