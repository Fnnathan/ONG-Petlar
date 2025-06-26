<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "Nick";
$endereco_pet = "Uruana";
$tipo = "Cão";
$raca = "Border Collie";
$porte = "Médio";
$idade = "1";
$peso = "25";
$tb_usuario_idUsuario ='2';



$idPet = salvarAnimais($conexao, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso, $tb_usuario_idUsuario );

echo $idPet;
?>