<?php    

 // Crear conexión de BD
 $conexion = mysqli_connect("localhost", "root", "leonardo", "zapateria" );
// Revisar si la conexión es exitosa
if (mysqli_connect_errno()){
echo "Error al conectar con MySQL: " .
mysqli_connect_error();

}

    // Select all the rows in the markers table
$query = "SELECT * FROM productos WHERE 1";
$result = mysqli_query($conexion, $query);

header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>';
// Start XML file, echo parent node
echo '<productos>';

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_assoc($result)){
// Add to XML document node
echo '<producto>';
echo '<idproducto>' . $row['idproducto'] . '</idproducto>';
echo '<nombreproducto>' . $row['nombreproducto'] . '</nombreproducto>';
echo '<descripcion>' . $row['descripcion'] . '</descripcion>';
echo '<precio>' . $row['precio'] . '</precio>';
echo '<imagen>' . $row['imagen'] . '</imagen>';
echo '</producto>';
}

// End XML file
echo '</productos>';

?>
    
