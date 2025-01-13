<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar articulo</title>
    </head>
    <body>
        <div>Eliminar el artículo 
        cuyo id se recibe como parámetro.
        </div>
        <hr>
        <?php
        // put your code here
        // Verificar que se recibe un
        // id de articulo.
        if (isset($_GET['clave']) and 
                $_GET['clave'] <> ""){
            // Obtener el id o clave
            // del articulo
            $id = $_GET['clave'];
            $sentencia = "delete from articulos where idArticulo = " . $id;
             // echo $sentencia;
            // Conexión de BD
            $conexion = mysqli_connect("localhost", "root", "root", "acme2");
            // Revisar conexión
            if (mysqli_connect_errno()){
                echo "Error de conexión: " . mysqli_connect_error();
            }
            // Ejecutar sentencia
            if (!mysqli_query($conexion, $sentencia)){
                die("Error de delete: " . mysqli_connect_error($conexion));
                
            }
            echo "Artículo eliminado id: " . $id;
            mysqli_close($conexion);
         
         }
         else {
             echo "No se especificó artículo "
             . "a eliminar";
         }
        
        
        ?>
    </body>
</html>
