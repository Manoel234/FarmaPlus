<!DOCTYPE html>
<!--
    
-->
<?php
    require_once '../Conexao/FuncionarioDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
            $idfuncionario = $_GET["idfuncionario"];
            $funcionarioDAO = new FuncionarioDAO;
            $funcionario = $funcionarioDAO->getFuncionarioById($idfuncionario);
            
        ?>
        <fieldset style="">
            <legend>Formulário de Cadastro</legend>        
            <form action="../Controlador/alterarFuncionarioController.php" method="post">
                <input type="hidden" name="idfuncionario" value="<?php echo $funcionario["idfuncionario"] ?>">
                <table>
                    
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" value="<?php echo $funcionario["nome"] ?>"/></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="cpf" value="<?php echo $funcionario["cpf"] ?>"</td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="text" name="dtnasc" value="<?php echo $funcionario["dtnasc"] ?>"</td>
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td><input type="text" name="end" size="60" value="<?php echo $funcionario["endereco"] ?>"/></td>
                    </tr>
                    <tr>
                        <td>CEP:</td>
                        <td><input type="text" name="cep" value="<?php echo $funcionario["cep"] ?>"/></td>
                    </tr>                
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Alterar"/></td>
                    </tr>

                </table>
            </form>
        </fieldset>
    </body>
</html>
