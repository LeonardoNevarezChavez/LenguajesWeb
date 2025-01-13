<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de equivalencias de tallas de calzado</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Tabla de equivalencias de tallas de calzado entre México y Estados Unidos</h2>

<table>
    <tr>
        <th>Talla México</th>
        <th>Talla EE. UU. (Hombres)</th>
        <th>Talla EE. UU. (Mujeres)</th>
    </tr>
    <?php
   // Definir las tallas en México y sus equivalentes en EE. UU. para hombres y mujeres
   $tallas_mexico = array(22, 22.5, 23, 23.5, 24, 24.5, 25, 25.5, 26, 26.5, 27, 27.5, 28, 28.5, 29, 29.5, 30);
   $equivalencias_us = array(
       "hombres" => array(5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13),
       "mujeres" => array(7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13, 13.5, 14, 14.5, 15)
   );

    // Generar las filas de la tabla
    foreach ($tallas_mexico as $index => $talla_mexico) {
        echo "<tr>";
        echo "<td>$talla_mexico</td>";
        echo "<td>{$equivalencias_us['hombres'][$index]}</td>";
        echo "<td>{$equivalencias_us['mujeres'][$index]}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>