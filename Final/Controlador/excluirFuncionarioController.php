<?php
require_once '../Conexao/FuncionarioDAO.php';

$idfuncionario = $_GET["idfuncionario"];

$funcionarioDAO = new FuncionarioDAO();

$funcionarioDAO->deleteFuncionarioById($idfuncionario);


echo "<script>";
echo "window.location='../View/listAllFuncionario.php'";
echo "</script>";

?>
