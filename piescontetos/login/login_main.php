<!DOCTYPE html>
<html lang="es">
    <head>
        <!--
          Ejemplo tomado de: http://www.phpeasystep.com/phptu/6.html
          Con algunos pocos cambios por sentencias ya depreciadas.
        -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Login main</title>
    </head>
    <body>
        <table width="300" border="0" align="center" cellpadding="0" 
               cellspacing="1" bgcolor="#CCCCCC">
            <tr>
            <form name="form1" method="post" action="login_check.php">
                <td>
                    <table width="100%" border="0" cellpadding="3" 
                           cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                            <td colspan="3"><strong>Acceso a miembros</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Nombre de usuario</td>
                            <td width="6">:</td>
                            <td width="294"><input name="myusername" 
                                                   type="text" id="myusername">
                            </td>
                        </tr>
                        <tr>
                            <td>Contraseña</td>
                            <td>:</td>
                            <td><input name="mypassword" type="password" 
                                       id="mypassword"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="Submit" 
                                       value="Login"></td>
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
</body>
</html>
