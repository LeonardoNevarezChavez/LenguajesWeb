<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Habilitar 
        actualizar</title>
    </head>
    <body>
        <div>
        Habilitar actualizar. Se 
        cargan en un formulario
        HTML los datos del artículo
        a actualizar. Se incluyen
        etiquetas "input" que permiten
        modificar cada campo.
            
        </div>
        <hr>
        <br>
        <?php
        // put your code here
        if (isset($_GET['clave']) and 
                $_GET['clave'] <> ""){
            // Obtener el id o clave
            // del articulo
            $id = $_GET['clave'];
            $sentencia = "select * from articulos where idArticulo = " . $id;
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
            // Almacenar resultado de la
            // sentencia de BD
            $resultado = mysqli_query($conexion, $sentencia);
            // Extraer datos del artículo
            if($fila = mysqli_fetch_array($resultado)){
                $id = $fila['idArticulo'];
                $nom = $fila['nombreArt'];
                $desc = $fila['descripcionArt'];
                $precio = $fila['precio'];
                $cat = $fila['idCategoria'];
                
                // Generar código HTMl con datos a 
                // modificar.
                $codigoHTML = '<form action="actualizado.php " '.
                        'method="get">'.
                        'Puede modificar los datos de este artículo<br>' .
                        'ID artículo: ' .
                        '<input name="claveart" type="text" size="5"' .
                        ' value="' . $id . '" >' .
                        '<br>'.
                        'Nombre articulo: ' .
                         '<input name="nombreart" type="text" ' .
                        ' value="' . $nom . '" >' .
                        '<br>' .
                        'Descripción  articulo: ' .
                         '<input name="descart" type="text" ' .
                        ' value="' . $desc . '" >' .
                        '<br>' .
                        'Precio articulo: ' .
                         '<input name="precio" type="text" ' .
                        ' value="' . $precio . '" >' .
                        '<br>' .
                        'ID categoria: ' .
                         '<input name="idcat" type="text" ' .
                        ' value="' . $cat . '" >' .
                        '<br><br>' .
                        
                        
                        '<input type="submit" name="submit" value="Enviar">' .
                        '</form>';
                
                 echo $codigoHTML;    
                        
                        
                
                
            }
            
            
            mysqli_close($conexion);
         
         }
         else {
             echo "No se especificó artículo "
             . "a eliminar";
         }
        
        
        
        ?>
    </body>
</html>
