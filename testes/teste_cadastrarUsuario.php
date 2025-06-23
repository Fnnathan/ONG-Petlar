<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "Teste automatico";
$email = "123@gmail.com";
$senha = "123";
$endereco_usuario = "rua laranjeira";
$telefone = "00000-0000"
$idUsuario = cadastrarUsuario($conexao, $nome, $email, $senha, $endereco_usuario, $telefone);

echo $idUsuario;
?>