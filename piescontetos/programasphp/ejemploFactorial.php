<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo factorial</title>
    </head>
    <body>
        <div>Ejemplo de factorial</div>
        <p>
            Se obtiene un factorial mediante
            código PHP. Se usa un formulario "HTML"
            y en la misma página se procesa el
            formulario.
        </p>
        <hr>
        
        <!--  iNDICAR página procesada aquí mismo 
              -->
        <form name="forma1" id="forma1"
              method = "post" 
              
              action = "<?php echo $_SERVER['PHP_SELF']; ?>"
              >
        Escribe número entero: 
        <input type='number' name='numero'>
        <br>
        <input type='submit' value='Calcular'>
        
        </form>
              
         
        <?php
        // put your code here
        // Validar que se ha asignado un valor al 
        // campo del formulario
        if (isset($_POST['numero'])){
            $num1 = $_REQUEST['numero']; 
            echo "Número: " , $num1;
            echo "  Su factorial es: " , factorial($num1);
        }
        
        function factorial($n){
            if ( $n > 0){
                return ($n * factorial($n - 1));
            }
            else {
                return 1;
            }
        }
          
        
        ?>
    </body>
</html>
