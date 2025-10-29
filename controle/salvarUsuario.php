<?php
session_start();
require_once "conexao.php";
require_once "funcoes.php";

// Verificar se o usuário está logado
if (isset($_SESSION['idUsuario'])) {
    // se o usuário estiver logado, pega o ID
    $idUsuario = $_SESSION['idUsuario'];
} else {
    // se o usuário não estiver logado vai ser cadastro
    $idUsuario = 0;
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco_usuario = $_POST['endereco_usuario'];
$telefone = $_POST['telefone'];

// Se ID = 0 cadastra  se ID é maior que 0 edita
if ($idUsuario == 0) {
    // Cadastro novo
    salvarUsuario($conexao, $nome, $email, $senha, $endereco_usuario, $telefone);
    header("location:../public/logar.php");
} else {
    // Editar do usuário 
    editarUsuario($conexao, $idUsuario, $nome, $email, $senha, $endereco_usuario, $telefone);

    // Atualiza os dados na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['endereco_usuario'] = $endereco_usuario;
    $_SESSION['telefone'] = $telefone;

    header("Location: ../public/perfilUsuario.php");
}
?>