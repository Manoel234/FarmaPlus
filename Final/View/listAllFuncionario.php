<?php
    require_once '../Conexao/FuncionarioDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="" method="POST">
            Pesquisar por Nome: <input type="text" name="pnome"/>
            <input type="submit" value="Pesquisar"/>
           
        </form>
        <?php
            // MODO ANTIGO $funcionarioDAO = new FuncionarioDAO();
            // MODO ANTIGO $funcionarios = $funcionarioDAO->getAllFuncionario();
        
            $funcionarioDAO = new FuncionarioDAO();
            if(!empty($_POST["pnome"])){
                $funcionarios = $funcionarioDAO->getFuncionarioByNome($_POST["pnome"]);
            }
            else{
                $funcionarios = $funcionarioDAO->getAllFuncionario();
            }
        
                    
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Endereço</th>";
            echo "<th>Cep</th>";
            echo "<th>CPF</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Excluir</th>";
            echo "<th>Alterar</th>";
            echo "</tr>";
            foreach ($funcionarios as $funcionario){
                echo "<tr>";
                    echo "<td>",$funcionario["nome"],"</td>";
                    echo "<td>",$funcionario["endereco"],"</td>";
                    echo "<td>",$funcionario["cep"],"</td>";
                    echo "<td>",$funcionario["cpf"],"</td>";
                    echo "<td>",$funcionario["dtnasc"],"</td>";
                    echo "<td><a href='../Controlador/excluirFuncionarioController.php?idfuncionario={$funcionario["idfuncionario"]}'>Excluir</a></td>";

                    echo "<td><a href='formAlterarFuncionario.php?idfuncionario={$funcionario["idfuncionario"]}'>Alterar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            
        
        
        ?>
        <form action="../View/formCadastrarFuncionario.php" method="POST">
            <a href="../View/formCadastrarFuncionario.php"><input type="button" value="Voltar"/></a>
           
        </form>
    </body>
</html>
