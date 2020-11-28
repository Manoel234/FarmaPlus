<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .erro{
                font-size: 12px;
                color: red;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <fieldset style="">
            <legend>Formulário de Cadastro</legend>        
            <form action="../Controlador/CadastrarFuncionario.php" method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf"</td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="text" name="dtnasc"</td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" name="end" size="60"/></td>
                </tr>
                <tr>
                    <td>CEP:</td>
                    <td><input type="text" name="cep"/></td>
                </tr>                
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Cadastrar"/></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="listAllFuncionario.php"><input type="button" value="Mostrar Cadastros"/></a></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <?php
                            if (!empty($_GET["c"])){
                                echo "<span class='erro'>",$_GET["c"],"</span>";
                            }
                        ?>
                        
                    </td>
                </tr>
            </table>
        </form>
       </fieldset>     
    </body>
</html>
