<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if (!$_SESSION['myusername']) {
    header("location:login_main.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Cambiar contraseña</title>
        <link rel='stylesheet' href='estilos/cabecera.css'>
        <link rel='stylesheet' href='estilos/menu.css'>
        <link rel='stylesheet' href='estilos/cuerpo.css'>
    </head>
    <body>
        <!-- Incluye cabecera de página -->
        <?php include 'componentes/cabecera.html'; ?>
        <!-- Incluye barra de navegación -->
        <?php include 'componentes/menu.html'; ?>
        <section>
            <br><br><br><br>
            <h3>Cambiar contraseña</h3>
            <br><br>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
                <table class="tablacuerpo">
                    <tr>
                        <td>Contraseña original: </td>
                        <td><input type="password" size="30" name="contrasenaoriginal"</td>
                    </tr>
                    <tr>
                        <td>Nueva contraseña: </td>
                        <td><input type="password" size="30" name="contrasenanueva1"</td>
                    </tr>
                    <tr>
                        <td>Confirmar nueva contraseña: </td>
                        <td><input type="password" size="30" name="contrasenanueva2"</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <button>&nbsp;&nbsp;&nbsp;Aceptar
                            &nbsp;&nbsp;&nbsp;</button>
                        </td>
                        <td>
                            <input type="button" onclick="location.href = 'inicio.php'" value='   Cancelar   '>
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
        </section> 

        <?php
        if ((isset($_POST['contrasenaoriginal']) and ( $_POST['contrasenaoriginal'] != "")) and ( isset($_POST['contrasenanueva1']) and ( $_POST['contrasenanueva1'] != "")) and ( isset($_POST['contrasenanueva2']) and ( $_POST['contrasenanueva2'] != ""))) {
            // Se proporcionaron los tres valores
            // Obtener datos del formulario
            $contrasenaoriginal = $_POST['contrasenaoriginal'];
            $contrasenanueva1 = $_POST['contrasenanueva1'];
            $contrasenanueva2 = $_POST['contrasenanueva2'];
            // Revisar coincidencia de las dos nuevas contraseñas.
            if ($contrasenanueva1 != $contrasenanueva2) {
                // Las contraseñas nuevas no coinciden.
                echo '<span style="color:blue; font-size:20px">';
                echo "La nueva contraseña no coincide con la confirmación";
                echo '</span>';
            } else {
                // Revisar que la contraseña original es la correcta
                if ($contrasenaoriginal != $_SESSION['mypassword']) {
                    echo '<span style="color:blue; font-size:20px">';
                    echo "La contraseña original es incorrecta";
                    echo '</span>';
                } else {
                    // Se cumplen todas las validaciones: tres valores, coinciden nuevas
                    // contraseñas y contraseña original coincide con variable de sesión
                    // $_SESSION['mypassword'] = $contrasenanueva1;
                    // Cambiar contraseña como usuario en la BD
                   //Connect to database
                    include 'componentesphp/conexionlogin.php';
                    // Manejo de transacciones
                    mysqli_query($conexion, "START TRANSACTION");
                    
                    $username = $_SESSION['myusername'];
                    $password = $contrasenanueva1;

                    // Cambiar contraseña para el usuario con permisos en la BD
                    $s2 = "SET PASSWORD FOR '$username'@'localhost' = PASSWORD('$password')";
                    $res2 = mysqli_query($conexion, $s2);

                    $num = mysqli_affected_rows($conexion);
                    if (!$res2) {
                        echo mysqli_connect_error();
                    }
                                     
                    $_SESSION['mypassword'] = $password;
                    
                    // Cambiar contraseña en la tabla members
                    $sentencia = "update members
                            set password = SHA('" . $contrasenanueva1 . "') " .
                            "where username = '" . $_SESSION['myusername'] . "'";
                    // echo $sentencia;
                    $resultado = mysqli_query($conexion, $sentencia);
                    if ($res2 and $resultado and mysqli_affected_rows($conexion) == 1) {
                        // contraseña modificada
                        // Commit de BD (confirmar cambios)
                         mysqli_query($conexion, "COMMIT");
                        // Cerrar sesión
                        session_destroy();
                        // header("location:login_contrasenacambiada.php");

                        echo '<span style="color:blue; font-size:20px">';
                        echo "Contraseña cambiada correctamente...";
                        echo "<br><br>";
                        echo "Su sesión ha sido cerrada.";
                        echo "<br><br>";
                        echo "Ir a la página: &nbsp;&nbsp;&nbsp;&nbsp;";
                        echo '<a href="login_main.php">Iniciar sesión</a>';
                        echo '</span>';
                    } else {
                        // Algún error, deshacer cambios en la BD
                         mysqli_query($conexion, "ROLLBACK");
                        echo '<span style="color:blue; font-size:20px">';
                        echo "ERROR. La contraseña no se pudo modificar...";
                        echo "<br><br>";
                    }
                }
            }

            //
        } else {
            echo "<table class='tablacuerpo'><tr><td>";
            echo '<span style="color:blue; font-size:20px">';
            echo "Debe proporcionar los tres valores";
            echo '</span>';
            echo '</td></tr></table>';
        }
        ?>

        </body>
</html>
