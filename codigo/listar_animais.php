<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar animais</title>
</head>
<body>
            <?php
                require_once "../conexao.php";
                require_once "../funcoes.php";

                    $id = $_POST['idproduto'];
                    $nome = $_POST['nome'];
                    $endereco_pet = $_POST['endereco_pet'];
                    $tipo = $_POST['tipo'];
                    $raca = $_POST['raca'];
                    $porte = $_POST['porte'];
                    $idade = $_POST['idade'];
                    $peso = $_POST['peso'];
                   
                    listarAnimais($conexao);
            ?>
 
</body>
</html>