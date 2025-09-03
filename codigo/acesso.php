<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="acesso.css" />
</head>
<body>
    <div class="container">
    <h1 class="heading">Acesso ao sistema</h1>

    <form class="form" action="verificarLogin.php" method="post">
        E-mail: <br>
        <input class="input" type="text" name="email" placeholder="E-mail" required /> <br><br>
        Senha: <br>
        <input class="input" type="password" name="senha" placeholder="E-mail" required /> <br><br>

        <span class= "forgot-password">
        Não é Cadastrado?<a href="form_usuario.php">Cadastrar-se</a> <br><br>
        </span>
        <input class="login-button" type="submit" value="Acessar">
    </form>
</body>
</html>