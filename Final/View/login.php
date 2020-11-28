<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .sombra{
                box-shadow: 13px 5px 0.5cm gray;
                
            }
        </style>
        
    </head>
    <body>
        <table align="center" class="sombra">
            <tr>
                <td>
                    <form action="../Controlador/loginController.php" method="post">
                    <fieldset>
                        <table>
                            <tr>
                                <td>Usuario:</td>
                                <td><input type="text" name="usuario"/></td>
                            </tr>
                            <tr>
                                <td>Senha:</td>
                                <td><input type="password" name="senha"/></td>
                            </tr>
                            <tr>                                
                                <td colspan="2">
                                    <input type="submit" value="Entrar"/>
                                </td>
                            </tr>                            
                        </table>
                    </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
