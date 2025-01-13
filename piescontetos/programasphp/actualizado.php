<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizado</title>
    </head>
    <body>
        <div>Se recuperan los datos del artículo a
        actualizar, se construye la sentencia 
        "update" y se ejecuta en la BD.</div>
        <hr>
        <?php
        // put your code here
        $conexion = mysqli_connect("localhost", "root", "root" , "acme2");
        // Verificar conexión
        if (mysqli_connect_errno()){
            echo "Error de conexión: " . mysqli_connect_error();
        }
        // obtener datos modificados de formulario
        $id = $_GET['claveart'];
        $nom = $_GET['nombreart'];
        $desc = $_GET['descart'];
        $prec = $_GET['precio'];
        $cat = $_GET['idcat'];
        
        // Construir sentencia update
        $sqlUpdate = "update articulos "
                . "set nombreart = '" . $nom .  "', " 
                . " descripcionArt = '" . $desc . "', " 
                . "precio = " . $prec . ", "
                . "idCategoria = " . $cat 
                . " where idArticulo = " . $id ;
        // Mostrar sentencia Update
        // echo $sqlUpdate;    
        
        // Ejecutar la actualización en la BD.
        if (!mysqli_query($conexion, $sqlUpdate)) {
            die("Error al actualizar " . mysqli_error($conexion));
        }
        echo "El artículo : " . $id . " ha sido actualizado.";
        mysqli_close($conexion);
        
        
        ?>
    </body>
</html>
