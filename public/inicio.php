<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="https://kit.fontawesome.com/91470376c8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="./assets/slide1.jpg" alt="Slide 1"></div>
            <div class="swiper-slide"><img src="./assets/slide2.jpg" alt="Slide 2"></div>
            <div class="swiper-slide"><img src="./assets/slide3.jpg" alt="Slide 3"></div>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="apresentacao">

        <h2>Conheça a ONG PETLAR</h2>
        <p>
            A ONG PETLAR acredita que cada vida importa. Nosso objetivo é proporcionar uma nova chance
            para cães e gatos abandonados, promovendo adoções responsáveis e conscientização sobre o bem-estar animal.
        </p>
        <a target="meiuca" href="listar_animais.php" class="botao-adotar">Quero Adotar ❤️</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>

</html>