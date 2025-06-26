<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idPet = '1';
$nome = "Dina";
$endereco_pet = "Casa da vó";
$tipo = 'Gato';
$raca = "vira lata";
$porte = "Pequeno";
$idade = "2";
$peso = "10";


editarAnimais($conexao, $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso )
?>