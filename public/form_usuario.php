<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="./css/estilo.css"> 
  <script src="../jquery-3.7.1.min.js"></script>
</head>

<body>

  <div class="cabecalhoazulescuro">
    <img src="./assets/dog.png" alt="dog" id="dogcabecalho">
     <a href="./index.php"><img src="./assets/logo.png" alt="logo" id="logo.png"></a>
    <img src="./assets/cat.png" alt="cat" id="catcabecalho">
  </div>

  <div class="container">
    <h1 class="heading">Crie sua conta</h1>

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


      <input class="login-button" type="submit" value="Cadastrar">

      <span class="forgot-password">
        Já está cadastrado? <a href="logar.php">Entrar</a>
      </span>
    </form>
  </div>
  <div class="msg_form">
    <h2>Criar uma conta é rápido, fácil e gratuito</h2>
Com a sua conta da Petlar você tem acesso a adoção e doação de animais que precisam de um lar!
  </div>
</body>

</html>