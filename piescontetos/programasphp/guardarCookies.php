<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guardar cookies</title>
    </head>
    <body>
        <div>Guardar cookies</div>
        <p>Son datos que se crean cuando visitamos
        páginas Web. Se almacenan en la computadora
        del usuario. Cada cookie lleva un nombre, 
        un valor y un dominio, opcionalmente información
        como la fecha de expiración, seguridad, etc.</p>
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
        // Guardar valores de formulario como cookie
        $expire = time() + (60 * 60 * 24 * 30);  // 1 mes
        // validar nombre y almacenarlo
        if (isset($_POST['nombre'])){
            setcookie("nombreUsuario", $_POST['nombre'], $expire);
        }
        // validar edad y almacenarla
        if (isset($_POST['edad'])){
            setcookie("edadUsuario", $_POST['edad'], $expire);
        }
        // validar color y almacenarlo
        if (isset($_POST['color'])){
            setcookie("colorUsuario", $_POST['color'], $expire);
        }
        ?>
        <br><br>
        <a href="leerCookies.php">
            Leer cookies almcenadas.
        </a>
    </body>
</html>
