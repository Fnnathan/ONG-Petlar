<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="./css/estilo.css"> <!-- ou o nome do seu CSS -->
</head>
<body>
  <div class="container">
    <h1 class="heading">Cadastro de Usuário</h1>

    <form class="form" action="../controle/salvarUsuario.php" method="post">
        Nome: <br>
        <input class="input" type="text" name="nome" placeholder="Nome" required><br><br>
        E-mail: <br>
        <input class="input" type="text" name="email" placeholder="E-mail" required><br><br>
     
        Senha: <br>
        <input class="input" type="password" name="senha" placeholder="Senha" required><br><br>
       
        Endereço: <br>
        <input class="input" type="text" name="endereco_usuario" placeholder="Endereço" required><br><br>
       
        Telefone: <br>
        <input class="input" type="text" name="telefone" placeholder="Telefone" required><br><br>
   

        <input class="login-button" type="submit" value="Cadastrar" href="index.php" >

         <span class="forgot-password">
                Já está cadastrado? <a href="logar.php">Entrar</a>
            </span>
    </form>
  </div>
</body>
</html>