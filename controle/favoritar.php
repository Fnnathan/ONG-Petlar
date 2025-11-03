<?php
require_once "conexao.php";
require_once "funcoes.php";

// ID do usuário logado e do pet (passados pela URL, por exemplo)
$idUsuario = $_GET['idUsuario'];
$idPet = $_GET['idPet'];

if (favoritarPet($conexao, $idUsuario, $idPet)) {
    header("Location: listarPets.php"); // volta pra listagem de pets
} else {
    header("Location: erro.php"); // se der erro, vai pra página de erro
}
?>