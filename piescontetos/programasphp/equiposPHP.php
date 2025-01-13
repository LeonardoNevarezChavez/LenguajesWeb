<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        <title>Recibe formulario</title>
    </head>
    <body>
        <div>Recibe un formulario HTML</div>
        <p>Se leen los datos recibidos del
            formulario y se muestran en la 
            página. Se crea un contenido dinámico
            según el equipo.</p>
        <hr>
        <?php
        // put your code here
        // Leer y mostrar datos
        $nombre_usu = $_REQUEST['nombre'];
        echo "Nombre usuario: " . $nombre_usu;
        echo "<br>";
        $correo_usu = $_REQUEST['email'];
        echo "Correo usuario: " . $correo_usu;
        echo "<br>";
        $equipo_usu = $_REQUEST['equipo'];
        echo "Equipo usuario: " . $equipo_usu;
        echo "<br>";
        echo "<hr>";
        if ($equipo_usu == "America") {
            echo "<img src='../imagenes/america.png' alt='america'>";
            echo "<br>";
            echo "América es un buen equipo pero debe contratar al Chicharito";
        }
        ?>
    </body>
</html>
