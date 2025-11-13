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
    <script src="../Js/jquery-3.7.1.min.js"></script>
    <script src="../Js/jquery.mask.min.js"></script>
</head>

<body>

    <div class="perfil-container">
        <div class="perfil-icone">
            <i class="fa-solid fa-user-circle"></i>
        </div>

        <h2 class="perfil-titulo">Informações Pessoais</h2>

        <form action="../controle/salvarUsuario.php" method="post">
            <label>Nome:</label>
            <input class="perfil-linha" type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>">

            <label>Email:</label>
            <input class="perfil-linha" type="email" name="email" value="<?php echo $_SESSION['email']; ?>">

            <label>Senha:</label>
            <input class="perfil-linha" type="password" name="senha" placeholder="Digite nova senha se quiser alterar">

            <label>Endereço:</label>
            <input class="perfil-linha" type="text" name="endereco_usuario" value="<?php echo $_SESSION['endereco_usuario']; ?>">

            <label>Telefone:</label>
            <input class="perfil-linha" type="text" name="telefone" value="<?php echo $_SESSION['telefone']; ?>">

            <button type="submit" class="perfil-btn-enviar">
                <i class="fa-solid fa-user-check"></i> Atualizar
            </button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#telefone').mask('(00) 0 0000-0000');
        });
    </script>
</body>

</html>