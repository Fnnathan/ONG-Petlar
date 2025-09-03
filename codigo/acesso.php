<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acesso ao Sistema</title>
    <link rel="stylesheet" href="entrar.css" />
</head>
<body>
    <div class="container">
        <h1 class="heading">Acesso ao sistema</h1>

        <form class="form" action="verificarLogin.php" method="post">
            <input class="input" type="text" name="email" placeholder="E-mail" required />
            
            <input class="input" type="password" name="senha" placeholder="Senha" required />

            <span class="forgot-password">
                Não é cadastrado? <a href="form_usuario.php">Cadastrar-se</a>
            </span>

            <input class="login-button" type="submit" value="Acessar" />
        </form>
    </div>
</body>
</html>
