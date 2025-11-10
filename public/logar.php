<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acesso ao Sistema</title>
    <link rel="stylesheet" href="./css/estilo.css" />
</head>

<body>
    <div class="cabecalhoazulescuro">
        <img src="./assets/dog.png" alt="dog" id="dogcabecalho">
        <a href="./index.php"><img src="./assets/logo.png" alt="logo" id="logo.png"></a>
        <img src="./assets/cat.png" alt="cat" id="catcabecalho">
    </div>

    <div class="container">
        <h1 class="heading">Acesse sua conta</h1>

        <form class="form" action="../controle/verificarLogin.php" method="post">
            <input class="input" type="text" name="email" placeholder="E-mail" required />

            <input class="input" type="password" name="senha" placeholder="Senha" required />

            <input class="login-button" type="submit" value="Acessar">

            <a href="./form_usuario.php">Criar minha conta</a>

        </form>
       
    </div>
        
    



</body>

</html>