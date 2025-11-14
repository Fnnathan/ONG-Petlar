<?php
session_start();
require_once "conexao.php";
require_once "funcoes.php";

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ../public/logar.php");
    exit;
}



if (!isset($_GET['id'])) {
    header("Location: ../public/meus_animais.php");
    exit;
}

$idPet = $_GET['id'];

removerAnimais($conexao, $idPet);


header("Location: ../public/meus_animais.php");
exit;