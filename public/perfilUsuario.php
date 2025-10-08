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
    <title>Favoritos</title>
     <link rel="stylesheet" href="./css/estilo.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>

<body>
<br><br>
<div class="icone-grande">
       <i class="bi bi-person-circle"></i>
    </div>
  
    <div class="caixa-azul">
         <!-- Ícone de usuário -->
        <div class="user-icon">
        <i class="fas fa-user-circle"></i>
    </div>

    <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2> <br>
    <?php echo $_SESSION['foto']; ?>
    <br>
        <p><strong>Nome:</strong> <?php echo $_SESSION['nome']; ?></p>
        <p><strong>E-mail:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Endereço:</strong> <?php echo $_SESSION['endereco_usuario']; ?></p>
        <p><strong>Telefone:</strong> <?php echo $_SESSION['telefone']; ?></p>
        <p><?php echo $_SESSION['foto']; ?></p> <!-- Supondo que a foto esteja armazenada em $_SESSION['foto'] -->
    </div>
   
</body>

</html>