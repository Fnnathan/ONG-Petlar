<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - PETLAR</title>
    <link rel="stylesheet" href="./css/estilo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="perfil-container">
        <div class="perfil-caixa">

            <div class="perfil-icone">
                <i class="fa-solid fa-user-circle"></i>
            </div>

            <h2 class="perfil-titulo">Informações dos Pets</h2>

            <form action="../controle/salvarAnimais.php" method="post">

                Nome:<br>
                <input class="perfil-linha" type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>"><br><br>

                Endereço:<br>
                <input class="perfil-linha" type="email" name="email" value="<?php echo $_SESSION['email']; ?>"><br><br>

                Tipo:<br>
                <input class="perfil-linha" type="password" name="senha" placeholder="Digite nova senha se quiser alterar"><br><br>

                Raça:<br>
                <input class="perfil-linha" type="text" name="endereco_usuario" value="<?php echo $_SESSION['endereco_usuario']; ?>"><br><br>

                Porte:<br>
                <input class="perfil-linha" type="text" name="telefone" value="<?php echo $_SESSION['telefone']; ?>"><br><br>

                Porte:<br>
                <input class="perfil-linha" type="text" name="telefone" value="<?php echo $_SESSION['telefone']; ?>"><br><br>
                

                <button type="submit" class="perfil-btn-enviar">
                    <i class="fa-solid fa-user-check"></i> Atualizar
                </button>
            </form>

        </div>
    </div>

</body>
</html>