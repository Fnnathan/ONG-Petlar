<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="entrar.css"> <!-- ou o nome do seu CSS -->
</head>
<body>
  <div class="container">
    <h1 class="heading">Cadastro de Usuário</h1>

    <form class="form" action="salvarUsuario.php" method="post">
        Nome: <br>
        <input class="input" type="text" name="nome" placeholder="Nome" required>
        E-mail: <br>
        <input class="input" type="text" name="email" placeholder="E-mail" required>
        Senha: <br>
        <input class="input" type="password" name="senha" placeholder="Senha" required>
        Endereço: <br>
        <input class="input" type="text" name="endereco" placeholder="Endereço" required>
        Telefone: <br>
        <input class="input" type="text" name="telefone" placeholder="Telefone" required>

        <input class="login-button" type="submit" value="Cadastrar">
    </form>
  </div>
</body>
</html>