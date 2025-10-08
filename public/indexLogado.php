<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="https://kit.fontawesome.com/91470376c8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>



<!-- Barra lateral -->
<div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn"><i class="fa-solid fa-xmark"></i></i></a>
    <a href="">Doar</a>
    <a href="#">Login</a>
</div>

<!-- Restante do conteúdo da página -->
<div class="cabecalhoazul">

    <!-- Botão para abrir/fechar a barra lateral -->
<a href="javascript:void(0)" id="botao_barra">
    <i class="fa-solid fa-bars" style="color:rgb(255, 255, 255);"></i>
</a>

    <a href="./perfilUsuario.php"><i class="fa-regular fa-user" style="color:rgb(255, 255, 255);"></i></a>
    <a href="./favoritos.php"><i class="fa-solid fa-heart" style="color:rgb(255, 255, 255);"></i></a>
    <a id="Sair" href="../controle/deslogar.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color:rgb(255, 255, 255);"></i></a>
</div>

<div class="cabecalhoazulescuro">
    <img src="./assets/dog.png" alt="dog" id="dogcabecalho">
    <img src="./assets/logo.png" alt="logo" id="logo.png">
    <img src="./assets/cat.png" alt="cat" id="catcabecalho">
</div>

<div class="botoes-container">
    <a href="#" class="botao adotar">
        <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
        <p class="botao-texto">Adotar</p>
    </a>
    <a href="#" class="botao doar">
        <i class="fa-solid fa-paw" style="font-size: 30px;"></i>
        <p class="botao-texto">Doar</p>
    </a>
    <a href="#" class="botao gato">
        <i class="fa-solid fa-fish" style="font-size: 30px;"></i>
        <p class="botao-texto">Gato</p>
    </a>
    <a href="#" class="botao cachorro">
        <i class="fa-solid fa-dog" style="font-size: 30px;"></i>
        <p class="botao-texto">Cachorro</p>
    </a>
</div>

<iframe src="./listar_animais.php" name="meiuca" class="iframemeio" frameborder="3" style="width:100%; height:900px;"></iframe>

<div class="footer">
    Adote, apoie, mude vidas. Juntos por um futuro melhor para os pets!
    <br><br>
    <img src="./assets/PETLARrodape.png" alt="Logo Petlar">
    <p>&copy; 2025-2026 Petlar.com.br </p><br><br>
    Alunos: Yasmin Monteiro, Nathan Corrêa, Lucas Corrêa
</div>

<script>
    // Quando o botão da barra lateral for clicado
    $('#botao_barra').click(function() {
        $('#sidebar').toggleClass('open');
    });

    // Quando o botão de fechar for clicado
    $('.closebtn').click(function() {
        $('#sidebar').removeClass('open');
    });
</script>

</body>
</html>
