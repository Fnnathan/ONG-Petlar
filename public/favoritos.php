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
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome'];echo $_SESSION['idUsuario']; ?>!</h1>
    <!-- Conteúdo da página de favoritos aqui -->
</body>
</html>