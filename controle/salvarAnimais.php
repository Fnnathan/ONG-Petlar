<?php
session_start();
require_once "conexao.php";
require_once "funcoes.php";

$nome = $_POST['nome'];
$endereco_pet = $_POST['endereco_pet'];
$tipo = $_POST['tipo'];
$raca = $_POST['raca'];
$porte = $_POST['porte'];
$idade = $_POST['idade'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$idUsuario = $_SESSION['idUsuario']; 

$idPet = salvarAnimais($conexao, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso, $idUsuario, $genero);

salvarFotos($conexao, $idPet, $foto);

header("location:../public/indexLogado.php");

?>