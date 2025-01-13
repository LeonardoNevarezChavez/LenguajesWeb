<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar articulos</title>
    </head>
    <body>
        <div>Buscar artículos.</div>
        <p>Permite buscar artículos, el usuario
        introduce el nombre (o una parte)del 
        artículo</p>
        <hr>
        
        <!--     
        Fomulario HTML
        -->
        <form name="forma1" id="forma1"
              method="get" 
              action="<?php echo $_SERVER['PHP_SELF']?>" >
        Escribir nombre del artículo (o una parte):
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="Buscar">
        
        </form>
        <?php
        // put your code here
        
        // Validar que el formulario ha
        // sido enviado y existe un texto
        // a buscar.
        if (isset($_GET['nombre'])){
        
         // Crear conexión de BD
        $conexion = mysqli_connect("localhost", 
                "root", "root", "acme2" );
        // Revisar si la conexión es exitosa
        if (mysqli_connect_errno()){
            echo "Error al conectar con MySQL: " .
            mysqli_connect_error();
        
        }
        
        // Construir consulta
        $textobuscar = $_GET['nombre'];
        $consulta = "select * from articulos " .
                " where nombreArt like '%" . 
                $textobuscar . "%'"  .
                " OR descripcionArt like '%".
                $textobuscar . "%'"  ;
        // Mostrar consulta
        echo $consulta;
        
        // Ejecutar la consulta y almacenar su resultado
        $resultado = mysqli_query($conexion, 
                $consulta);
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
        mysqli_close($conexion);
        
        } // cierre de if
        
        ?>
    </body>
</html>
