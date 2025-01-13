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

//header("Content-type: text/xml");

$nuevoarreglo = array();
while ($fila_bd = mysqli_fetch_assoc($result)) {
 $nuevoarreglo[] = $fila_bd;
}
// obtener todos los registros en formato JSON
echo json_encode($nuevoarreglo)
?>
    