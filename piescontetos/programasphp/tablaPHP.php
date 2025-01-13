<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla PHP</title>
    </head>
    <body>
        <div>Tabla con PHP</div>
        <p>Se crea una tabla de 100
            renglones y color con código
            PHP.</p>
        <hr>
        <?php
        // put your code here
        echo "<table border='1'>";
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 2) == 0) {
                echo "<tr style = 'color:" 
                . "aqua; background-color: blueviolet'>";
            } else {
                echo "<tr>";
            }
            echo "<td>$i</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
