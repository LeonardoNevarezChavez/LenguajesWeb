<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if (!$_SESSION['myusername']) {
    header("location:main_login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        Login Successful
        <br>
        <?php
        echo "Usuario: " . $_SESSION['myusername'];
        ?>
        <br><br>
        <a href="logout.php">Cerrar sesión</a>
    </body>
</html>
