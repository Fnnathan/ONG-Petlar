

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acesso ao Sistema</title>
    <link rel="stylesheet" href="./css/estilo.css" />
</head>
<body>
    <div class="container">
        <h1 class="heading">Acesso ao sistema</h1>

        <form class="form" action="../controle/verificarLogin.php" method="post">
            <input class="input" type="text" name="email" placeholder="E-mail" required />
            
            <input class="input" type="password" name="senha" placeholder="Senha" required />

            <span class="forgot-password">
                Não é cadastrado? <a href="./form_usuario.php">Cadastrar-se</a>
            </span>

            <input class="login-button" type="submit" value="Acessar" href="./indexLogado.php"  />
        </form>
    </div>
</body>

<?php 
require_once "../controle/conexao.php";
require_once "../controle/funcoes.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $idUsuario = verificarLogin($conexao, $email, $senha);

    if ($idUsuario == 0) {
        echo "Usuário não encontrado! Deseja se<a href='form_usuario.php'>cadastrar?</a>";
        
    }
    else {
        $usuario = pegarDadosUsuario($conexao, $idUsuario);
        
        if ($usuario == 0) {
            header("Location:  ../public/index.php");
        
        }
        else {
            session_start();
            $_SESSION['logado'] = 'sim';
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['idUsuario'] = $usuario['idUsuario'];
            header("Location: ../public/indexLogado.php");
          
        }
      }
?> 
</html>
