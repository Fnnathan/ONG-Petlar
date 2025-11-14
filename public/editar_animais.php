<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ./logar.php");
    exit;
}

if (!isset($_GET['idPet'])) {
    header("Location: listar_animais.php");
    exit;
}

require_once "../config/conexao.php";

// busca o animal
$idPet = $_GET['idPet'];
$sql = "SELECT * FROM tb_pet WHERE idPet = $idPet";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 0) {
    header("Location: listar_animais.php");
    exit;
}

$pet = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Animal - PETLAR</title>
    <link rel="stylesheet" href="./css/estilo.css" />
</head>

<body>

    <div class="perfil-container">
        <div class="perfil-icone">
            <i class="fa-solid fa-paw"></i>
        </div>

        <h2 class="perfil-titulo">Editar Animal</h2>

        <form action="../controle/salvarAnimal.php" method="post">

            <input type="hidden" name="idPet" value="<?php echo $pet['idPet']; ?>">

            <input class="perfil-linha" type="text" name="nome" 
                   placeholder="Nome do animal"
                   value="<?php echo $pet['nome']; ?>">

            <input class="perfil-linha" type="text" name="endereco_pet" 
                   placeholder="Endereço"
                   value="<?php echo $pet['endereco_pet']; ?>">

            <input class="perfil-linha" type="text" name="tipo" 
                   placeholder="Tipo (Ex: Cachorro)"
                   value="<?php echo $pet['tipo']; ?>">

            <input class="perfil-linha" type="text" name="raca" 
                   placeholder="Raça"
                   value="<?php echo $pet['raca']; ?>">

            <input class="perfil-linha" type="text" name="porte" 
                   placeholder="Porte"
                   value="<?php echo $pet['porte']; ?>">

            <input class="perfil-linha" type="number" name="idade" 
                   placeholder="Idade"
                   value="<?php echo $pet['idade']; ?>">

            <input class="perfil-linha" type="number" step="0.1" name="peso" 
                   placeholder="Peso"
                   value="<?php echo $pet['peso']; ?>">

            <input class="perfil-linha" type="text" name="genero" 
                   placeholder="Gênero"
                   value="<?php echo $pet['genero']; ?>">

            <button type="submit" class="perfil-btn-enviar">
                <i class="fa-solid fa-check"></i> Salvar Alterações
            </button>
        </form>
    </div>

</body>

</html>
