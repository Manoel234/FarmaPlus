<?php     include 'View/validalogin.php' ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="silver">
        <table width="800" height="600" align="center" border="1" bgcolor="ffffff">
            <tr height="10%">
                <td colspan="2">BANNER</td>
            </tr>
            <tr align="right">
                <td colspan="2">
                    Usuário:<?php echo $_SESSION["perfil"] ?>
                    <a href="Controlador/sairController.php">SAIR</a>
                </td>
            </tr>            
            <tr height="90%" valign="top">
                <td width="20%">
                  <?php
                    switch ($_SESSION["perfil"]){
                       case "Administrador":
                           include 'View/menuAdm.php';
                           break;
                       case "Restrito":
                           include "View/menuUsuario.php";
                        break;
                        
                    }
    
                  ?>
                </td>
                <td width="80%">
                    <iframe src="" name="centropag" width="100%" height="100%" frameborder="0"></iframe>
                </td>
            </tr>            
        </table>
    </body>
</html>
