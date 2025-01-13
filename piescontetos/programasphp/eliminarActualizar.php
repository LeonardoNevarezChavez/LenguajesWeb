<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar/Actualizar Articulos</title>
    </head>
    <body>
        <div>Eliminar o actualizar articulos
            de la tabla de "Articulos" 
            de la BD "acme2" en MySQL.</div>
        <hr>
        <?php
        // Crear conexion de BD
        $conexion = mysqli_connect("localhost", "root", "root", "acme2");
        //Revisas si la conexion es exitosa
        if (mysqli_connect_errno()) {
            echo "Error al conectar con MySQL: " .
            mysqli_connect_error();
        }
        //Ejecutar la consulta y almacenar su resultado
        $resultado = mysqli_query($conexion, "select * from articulos");
        //Mostrar resultado en la pagina HTML
        echo "<table border='1'>"
        . "<tr>"
        . "<th>ID Articulo</th>"
        . "<th>Nombre Articulo</th>"
        . "<th>Descripcion Articulo</th>"
        . "<th>Precio Articulo</th>"
        . "<th>ID Categoria</th>"
        . "<th>Eliminar</th>" 
        .  "<th>Actualizar</th>"      
        . "</tr>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
            <td> " . $fila['idArticulo'] . "</td>
                <td> " . $fila['nombreArt'] . "</td>
                    <td> " . $fila['descripcionArt'] . "</td>
                        <td> " . $fila['precio'] . "</td>
                            <td> " . $fila['idCategoria'] . "</td>" .
               "<td> "
                    
                    . "<a href='eliminar.php?clave=" .
                    $fila['idArticulo'] . "'>" .
                    "Eliminar" .
                    "</a>" .
               "</td>" .
                    "<td> "
                    . "<a href='habilitarActualizar.php?clave=" .
                    $fila['idArticulo'] . "'>" .
                    "Actualizar" .
                    "</a>" .
               "</td>"
            . "<tr>";
        }
        echo "</table>";
        //cerrar conexion de BD
        mysqli_close($conexion);
        ?>
    </body>
</html>
