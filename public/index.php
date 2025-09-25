<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="https://kit.fontawesome.com/91470376c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</head>

<body>

<div class="cabecalhoazul">


<a id="botao_barra"><i class="fa-solid fa-bars" style="color:rgb(255, 255, 255);"></i></a>

<a href="./perfilUsuario.php"><i class="fa-regular fa-user" style="color:rgb(255, 255, 255);"></i></a>
<a href="./favoritos.php"><i class="fa-solid fa-heart" style="color:rgb(255, 255, 255);"></i></a>

<div id="barra" class="barra_lateral">
    <a id="botao_barra"><i class="fa-solid fa-bars" style="color:rgb(255, 255, 255);"></i></a>
    <a href="">Adotar</a>
    <a href="./form_pet.php">Doar</a>
    <a href="">Gatos</a>
    <a href="">Cachorros</a>
    <a href="./logar.php">Login</a>

</div>
</div>

<div class="cabecalhoazulescuro">

<img src="./assets/dog.png" alt="dog" id="dogcabecalho">


<img src="./assets/logo.png" alt="logo" id="logo.png">


<img src="./assets/cat.png" alt="cat" id="catcabecalho">



</div>




    <iframe src="./listar_animais.php" name="meiuca" class="iframemeio" frameborder="3" style="width:100%; height:900px;"></iframe>
    
    </iframe>

    <div class="footer">
        Adote, apoie, mude vidas. Juntos por um futuro melhor para os pets!
        <br><br>
        <img src="./assets/PETLARrodape.png" alt="Logo Petlar";>
        <p>&copy; 2025-2026 Petlar.com.br </p><br><br>
         Alunos: Yasmin Monteiro
                Nathan Corrêa
                Lucas Corrêa
    </div>

<script>
document.getElementById("botao_barra").addEventListener("click", function() {
    document.getElementById("barra").classList.toggle("active");
});
</script>


</body>
</html>