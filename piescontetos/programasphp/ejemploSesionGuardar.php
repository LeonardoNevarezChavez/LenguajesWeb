<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php session_start();  ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Guardar datos de sesión</title>
    </head>
    <body>
        <div>Se guardan datos o variables de sesión. 
        Estas se pueden generar en cualquier página 
        de un sitio o aplicación Web y existen mientras
        el usuario está activo en su sesión.</div>
        <hr>
        <form method="post" 
              action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre: <input type="text" name="nombre"><br>
            Edad: <input type="number" name="edad"><br>
            Color preferido: <input type="color" name="color">
            <br>
            <input type="submit" value="Guardar">
        </form>
        <?php
        
        // validar nombre y almacenarlo
        if (isset($_POST['nombre'])){
            $_SESSION['nombreUsu'] =  $_POST['nombre'];
        }
        else {
            $_SESSION['nombreUsu'] =  "anónimo";
        }
        // validar edad y almacenarla
        if (isset($_POST['edad'])){
            $_SESSION['edadUsu'] = $_POST['edad'];
        }
        // validar color y almacenarlo
        if (isset($_POST['color'])){
            $_SESSION['colorUsu'] =  $_POST['color'];
        }
        ?>
        <br><br>
        <a href="leerSesion.php">
            Leer datos de sesión.
        </a>
    </body>
</html>
