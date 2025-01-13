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
        <title>Leer datos de sesión</title>
    </head>
    <body>
        <div>Se leen datos de sesión y se muestran
        en la página.</div>
        <hr>
        <?php
        // put your code here
        if (isset($_SESSION['nombreUsu'])) {
            echo "Bienvenido ... " .
                $_SESSION['nombreUsu'];
        }
            else {
                echo "Bienvenido usuario";
            }
        ?>
    </body>
</html>
