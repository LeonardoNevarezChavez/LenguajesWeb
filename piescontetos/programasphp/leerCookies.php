<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leer cokies</title>
    </head>
    <body>
        <div>Leer cookies del usuario.</div>
        <hr>
        <?php
        // Leer cookies (nombre)
        if (isset($_COOKIE['nombreUsuario'])) {
            echo "Bienvenido " . $_COOKIE['nombreUsuario'];
        } else {
            echo "Bienvenido invitado";
        }
        echo "<br><br>";

        // Leer cookies (edad)
        if (isset($_COOKIE['edadUsuario'])) {
            echo "Edad: " . $_COOKIE['edadUsuario'];
            if ($_COOKIE['edadUsuario'] >= 18) {
                echo " eres mayor de edad. ";
            } else {
                echo " eres menor de edad. ";
            }
        } else {
            echo "Edad sin asignar.";
        }
        echo "<br><br>";
        
        // Leer cookies (color)
        if (isset($_COOKIE['colorUsuario'])){
            echo "Color: " . $_COOKIE['colorUsuario'] ;
            echo "<br><br>";
            echo "<table border='1' " .
               "bgcolor='" .
                $_COOKIE['colorUsuario'] . "'>" .
                "<tr><td>Texto</td></tr>" .
                "</table>";
        }
        else {
            echo "Color sin asignar.";
        }
        ?>
    </body>
</html>
