<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if (!$_SESSION['myusername']) {
    header("location:../login_main.php");
}
?>
<!DOCTYPE html>
<html lang='es'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento eliminar confirmar</title>
    <link rel='stylesheet' href='../estilos/cabecera.css'>
    <link rel='stylesheet' href='../estilos/menu.css'>
    <link rel='stylesheet' href='../estilos/cuerpo.css'>
</head>
<body>
    <!-- Incluye cabecera de página -->
    <?php include '../componentes/cabecera2.html'; ?>
    <!-- Incluye barra de navegación -->
    <?php include '../componentes/menu2.html'; ?>
    <section>
        <br><br><br>
        <h3>Menú Incremento | Incremento confirmar eliminación</h3>
        <br><br>

        <?php
        if ((isset($_GET['folio']) and ( $_GET['folio'] != "")) and 
                (( isset($_GET['idcliente']) and ( $_GET['idcliente'] != "")) or
                ( isset($_GET['idempresa']) and ( $_GET['idempresa'] != "")))) {
            $idcliente = $_GET['idcliente'];
            $idempresa = $_GET['idempresa'];
            $folio = $_GET['folio'];
            // Mostrar opciones para eliminar en la página HTML
            echo "<p style='color:blue; font-size:20px;'>";
            echo "¿Desea realmente eliminar este Incremento?";
            echo "<br><br>";
            echo "El incremento con folio: $folio, para el cliente con Id: $idcliente"
                    . ",  o de la empresa con Id: $idempresa "
                    . " se eliminará de manera definitiva.";
            echo "<br><br>";
            echo "Clic en 'Sí' para eliminar, en 'No' para cancelar";
            echo "</p>";
            echo "<br><br>";
            echo "<table class='tablacuerpo' >
             <tr><td>";
            echo "<input type='button' onClick='location.href=" .
            '"' . 'incrementoeliminar.php?folio=' . $folio .
            '"' . "'" . 
            "value = '   Sí   '>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "</td><td>" ;
            echo "<input type=button onClick=" . '"' . "location.href = 'incremento.php'" . '"' . 
               "value='   No   '>";       
       
            echo "</td></tr></table>";         
            } else {
            echo "Se debe especificar un folio, Id de cliente o nombre de empresa";
        }
        ?>
        
    </section>
</body>
</html>




