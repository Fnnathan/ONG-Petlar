<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "Nick";
$endereco_pet = "Uruana";
$tipo = "Cahorro";
$raca = "Border Collie";
$porte = "Médio";
$idade = "1 ";
$peso = "25";



$idPet = salvarAnimais($conexao, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso );

echo $idPet;
?>