<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Artículo</title>
    </head>
    <body>
        <div>Agregar Articulo</div>
        <p>Agregar un nuevo articulo, en la
        tabla "articulos" de la BD "acme2".
        Los datos se capturan en un formulario,
        se envian al servidor, se construye un
        "insert" y se ejecuta.</p>
        <hr>
        <?php
        // Crear conexion de BD
        $conexion = mysqli_connect("localhost", "root", "", "acme2");
        //Revisas si la conexion es exitosa
        if (mysqli_connect_errno()){
            echo "Error al conectar con MySQL: ".
            mysqli_connect_error();
        }
        $idArticulo = $_POST['idArticulo'];
        $nomArticulo = $_POST['nomArticulo'];
        $desArticulo = $_POST['desArticulo'];
        $precio = $_POST['precio'];
        $idCat = $_POST['idCat'];
        $sql = "INSERT INTO articulos (id_articulo, nombre_art, descripcion_art, precio, id_Cat) "
                                . "VALUES ('$idArticulo','$nomArticulo','$desArticulo','$precio','$idCat')";
        //Ejecutar sentencia INSERT
        if(!mysqli_query($conexion, $sql)){
            die('Error: ' . mysqli_error($conexion));
        }
        echo "1 articulo agregado";
        mysqli_close($conexion);
        ?>
    </body>
</html>
