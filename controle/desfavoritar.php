<?php
require_once "conexao.php";
require_once "funcoes.php";

$idUsuario = $_GET['idUsuario'];
$idPet = $_GET['idPet'];

if (desfavoritarPet($conexao, $idUsuario, $idPet)) {
    header("Location: listarPets.php");
} else {
    header("Location: erro.php");
}
?>