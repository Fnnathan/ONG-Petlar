<?php
require_once "conexao.php";
require_once "funcoes.php";
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$idUsuario = verificarLogin($conexao, $email, $senha);

if ($idUsuario == 0) {
    echo 'Usuário não encontrado!';
    
} else {
    $usuario = pegarDadosUsuario($conexao, $idUsuario);

    if ($usuario == 0) {
        header("Location: ../public/index.php");
        
    } else {
        $_SESSION['logado'] = 'sim';
        $_SESSION['idUsuario'] = $idUsuario;
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['endereco_usuario'] = $usuario['endereco_usuario'];
        $_SESSION['telefone'] = $usuario['telefone'];
        $_SESSION['foto'] = $usuario['foto'];
      
        


        header("Location: ../public/indexLogado.php");
        
    }
}