<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mostrar articulos</title>
    </head>
    <body>
        <div>Mostrar la tabla de 
        "Artículos" de la BD "acme2" en
        MySQL.</div>
        <hr>
        
        <?php
        // put your code here
        // Crear conexión de BD
        $conexion = mysqli_connect("localhost", 
                "root", "root", "acme2" );
        // Revisar si la conexión es exitosa
        if (mysqli_connect_errno()){
            echo "Error al conectar con MySQL: " .
            mysqli_connect_error();
        
        }
        // Ejecutar la consulta y almacenar su resultado
        $resultado = mysqli_query($conexion, 
                "select * from articulos");
        // Mostrar resultado en la página HTML
        echo "<table border='1'>
             <tr>
             <th>ID Artículo</th>
             <th>Nombre Artículo</th>
             <th>Descripción Artículo</th>
             <th>Precio Artículo</th>
             <th>Id Categoría Artículo</th>
             </tr>";
        while ($fila = mysqli_fetch_array($resultado)){
            echo "<tr>
                <td>" .$fila['idArticulo'] . "</td>
                <td>" .$fila['nombreArt'] . "</td>
                <td>" .$fila['descripcionArt'] . "</td>
                <td>" .$fila['precio'] . "</td>
                <td>" . $fila['idCategoria'] . "</td>"
                . "</tr>";
                    
        }
        echo "</table>";
        // Cerrar conexión de BD.
        
        $resul2 = mysqli_query($conexion, 
                "select nombreArt from articulos");
        echo '<input id="city" list="city1" ><datalist id="city1" >';
        
        foreach ($dbo->query($resul2) as $row) {
 echo '<option value="$row[nombreArt]"/>'; // Format for adding options 
 }
 
 echo "</datalist>";
 
        mysqli_close($conexion);
        ?>
    </body>
</html>
