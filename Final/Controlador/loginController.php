<?php
session_start();

require_once '../Conexao/loginDAO.php';

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION["usuario"] = $usuario["usuario"];
    $_SESSION["perfil"] = $usuario["perfil"];
    echo "<script>";
    echo "   window.location='../index.php'";
    echo "</script>";
} else {
    echo "<script>";
    echo "   window.location='../View/login.php'";
    echo "</script>";
}