<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Login check</title>
    </head>
    <body>
        <?php
        ob_start();

        include 'componentesphp/conexionlogin.php';


        // Define $myusername and $mypassword 
        $myusername = $_POST['myusername'];
        $mypassword = $_POST['mypassword'];

        // To protect MySQL injection (more detail about MySQL injection)
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        //$myusername = mysqli_real_escape_string($myusername);
        //$mypassword = mysqli_real_escape_string($mypassword);
        // Usar método de encriptación SHA, como está guardada la contraseña
        $consulta = "SELECT * FROM members WHERE username='$myusername' and "
                . "password= SHA('$mypassword')";
        $resultado = mysqli_query($conexion, $consulta);

        // Mysql_num_row is counting table row
        $count = mysqli_affected_rows($conexion);


        // If result matched $myusername and $mypassword, table row must be 
        // 1 row
        if ($resultado && $count == 1) {

            // Register $myusername, $mypassword and redirect to file 
            // "login_success.php"
            $_SESSION['myusername'] = $myusername;
            //   session_register("myusername");
            $_SESSION['mypassword'] = $mypassword;
            // session_register("mypassword"); 
            header("location:inicio.php");
        } else {
             echo '<span style="color:blue; font-size:20px">';
            echo "Error en nombre de usuario o contraseña";
            echo "<br><br>";
            echo "Ir a la página: &nbsp;&nbsp;&nbsp;&nbsp;";
            echo '<a href="login_main.php">Iniciar sesión</a>';
            echo '</span>';
        }
        ob_end_flush();
        ?>
    </body>
</html>
