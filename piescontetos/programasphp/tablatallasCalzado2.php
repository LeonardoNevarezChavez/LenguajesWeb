<!DOCTYPE html>
<html>
<head>
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
    // Definir la fórmula para calcular las tallas en EE. UU. basadas en las tallas en México
    $talla_usa_man_begin = 5;
    $talla_usa_woman_begin = 7;

    // Generar las filas de la tabla
    for ($talla_mexico = 22; $talla_mexico <= 30; $talla_mexico += 0.5) {
        echo "<tr>";
        echo "<td>$talla_mexico</td>";
        echo "<td>" . $talla_usa_man_begin . "</td>";
        echo "<td>" . $talla_usa_woman_begin  . "</td>";
        echo "</tr>";
        $talla_usa_man_begin = $talla_usa_man_begin + 0.5;
        $talla_usa_woman_begin = $talla_usa_woman_begin + 0.5;

    }

    /* Código PHP para validar formulario   */
    
    ?>
</table>

</body>
</html>
