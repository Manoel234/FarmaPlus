<?php
    require_once '../Conexao/FuncionarioDAO.php';
    require_once '../Classes/FuncionarioDTO.php';
    
    
// recupera o form
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dtnasc = $_POST["dtnasc"];
$end = $_POST["end"];
$cep = $_POST["cep"];
$idfuncionario = $_POST["idfuncionario"];

$funcionarioDTO = new FuncionarioDTO();
$funcionarioDTO->setIdfuncionario($idfuncionario);
$funcionarioDTO->setNome($nome);
$funcionarioDTO->setCpf($cpf);
$funcionarioDTO->setDtnasc($dtnasc);
$funcionarioDTO->setEndereco($end);
$funcionarioDTO->setCep($cep);

$funcionarioDAO = new FuncionarioDAO();

$funcionarioDAO->alterarFuncionario($funcionarioDTO);

echo "<script>";
echo "   window.location='../View/listAllFuncionario.php'";
echo "</script>";


?>