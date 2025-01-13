<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $dbhost = "localhost";
                    $dbname = "mysql";
                    

//Connect to database

                    $conn = mysqli_connect($dbhost, 'leonardo', '12345', $dbname)
                            or die("Could not connect: " .
                             mysqli_error($conn));
                    //mysql_select_db($dbname, $conn) or die(mysql_error());

                   

                    $sentencia1 = "select user from mysql.user";
                    echo $sentencia1 . "<br><br>";
                    $result_bd = mysqli_query($conn, $sentencia1);
                    $num = mysqli_affected_rows($conn);
                    while ($fila = mysqli_fetch_array($result_bd)){
                        echo $fila['user'] . "<br>";
                    }
                    
        ?>
    </body>
</html>
