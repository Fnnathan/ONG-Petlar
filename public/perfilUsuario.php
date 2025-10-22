<?php
session_start();


if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ./logar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - PETLAR</title>
     <link rel="stylesheet" href="./css/estilo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    
    </style>
</head>

<body>
    <div class="perfil-container">

        <div class="perfil-caixa">
         

            <div class="perfil-icone">
                <i class="fa-solid fa-user-circle"></i>
            </div>

            <h2 class="perfil-titulo">Informações Pessoais</h2>

            <div class="perfil-linha">
                Nome
                <?php echo $_SESSION['nome']; ?>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                Email
                <?php echo $_SESSION['email']; ?>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                Senha
                ****
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                Endereço
                <?php echo $_SESSION['endereco_usuario']; ?>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                Telefone
                <?php echo $_SESSION['telefone']; ?>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <button class="perfil-btn-enviar">
                <i class="fa-solid fa-user-check"></i> Enviar
            </button>
        </div>

    </div>
</body>



</html>