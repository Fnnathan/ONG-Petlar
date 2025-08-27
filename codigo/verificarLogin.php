<?php
require_once "conexao.php";
require_once "funcoes.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  verificarLogin($conexao,$email,$senha);
?>