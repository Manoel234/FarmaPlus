<?php
require_once '../Classes/FuncionarioDTO.php';
require_once '../Conexao/FuncionarioDAO.php';


// recupera o form
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dtnasc = $_POST["dtnasc"];
$end = $_POST["end"];
$cep = $_POST["cep"];

$funcionarioDTO = new FuncionarioDTO();
$funcionarioDTO->setNome($nome);
$funcionarioDTO->setCpf($cpf);
$funcionarioDTO->setDtnasc($dtnasc);
$funcionarioDTO->setEndereco($end);
$funcionarioDTO->setCep($cep);

$funcionarioDAO = new FuncionarioDAO();
$verificar = $funcionarioDAO->salvar($funcionarioDTO);

if ($verificar){
    $msg = "Cadastro com sucesso";
    echo "<script>";
    echo "   window.location='../View/formCadastrarFuncionario.php?c=$msg'";
    echo "</script>";
}
?>

