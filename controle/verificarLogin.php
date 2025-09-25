<?php
require_once "conexao.php";
require_once "funcoes.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $idUsuario = verificarLogin($conexao, $email, $senha);

    if ($idUsuario == 0) {
        header("Location: ../public/index.php");
        
    }
    else {
        $usuario = pegarDadosUsuario($conexao, $idUsuario);
        
        if ($usuario == 0) {
            header("Location:  ../public/index.php");
        
        }
        else {
            session_start();
            $_SESSION['logado'] = 'sim';
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: ../public/index.php");
          
        }
      }
?>