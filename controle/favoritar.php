<?php
require_once "conexao.php";
require_once "funcoes.php";


$idUsuario = $_GET['idUsuario'];
$idPet = $_GET['idPet'];

favoritar_desfavoritar($conexao, $idUsuario, $idPet);
header("location:../public/listar_animais.php");

?>