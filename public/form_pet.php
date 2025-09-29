<?php
session_start();


if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: form_usuario.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pets</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="container">
<h1 class="heading">Doação de animais</h1>
     <form class="form" action="../controle/salvarAnimais.php" method="post" enctype="multipart/form-data">
        Nome do Pet: <br>
        <input class="input" type="text" name="nome"> <br><br>

        Endereço do pet: <br>
        <input class="input" type="text" name="endereco_pet"> <br><br>
        
        Tipo: <br><br>
        Cachorro<input type="radio" value="Cachorro" name="tipo">Gato<input type="radio" value="Gato" name="tipo"> <br><br>


        Porte: <br><br>
        Grande<input value="Grande" type="radio" name="porte">  Médio<input type="radio" value="Médio" name="porte">  Pequeno<input type="radio" value="Pequeno" name="porte"> <br><br>
        Raça: <br>
        <input class="input" type="text" name="raca"> <br><br>
        Idade: <br>
        <input class="input" type="text" name="idade"> <br><br>
        Peso: <br>
        <input class="input" type="text" name="peso"> <br><br>
        Foto do Pet: <br>
        <input class="input" type="file" name="foto"> <br><br>

        <input class="input" type="submit" value="Cadastrar">
</body>
</html>