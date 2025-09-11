<?php
require_once "conexao.php";
require_once "funcoes.php";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$endereco_usuario = $_POST['endereco_usuario'] ?? '';
$telefone = $_POST['telefone'] ?? '';

salvarUsuario($conexao, $nome, $email, $senha, $endereco_usuario, $telefone);
?>
