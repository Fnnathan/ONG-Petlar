<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ./logar.php");
}

require_once "../controle/conexao.php";
require_once "../controle/funcoes.php";

$idUsuario = $_SESSION['idUsuario'];

$favoritos = pegarFavoritos($conexao, $idUsuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Meus Pets Favoritos</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            if (!empty($favoritos)) {
                foreach ($favoritos as $pet) {
                    echo '<div class="col">';
                    echo '  <div class="card h-100 shadow-sm">';


                    if (!empty($pet["foto"])) {
                        echo '    <img src="../imagens/' . $pet["foto"] . '" class="card-img-top" alt="' . $pet["nome"] . '">';
                    } else {
                        echo '    <img src="../imagens/padrao.jpg" class="card-img-top" alt="Pet sem foto">';
                    }


                    echo '    <div class="card-body">';
                    echo '      <h5 class="card-title">' . $pet["nome"] . '</h5>';
                    echo '      <p class="card-text">';
                    echo 'Raça: ' . $pet["raca"] . '<br>';
                    if (!empty($pet["endereco_pet"])) {
                        echo 'Local: ' . $pet["endereco_pet"] . '<br>';
                    }
                    echo '      </p>';
                    echo '    </div>';


                    echo '    <div class="card-footer">';
                    if (!empty($pet["idade"])) {
                        echo '<small class="text-body-secondary">Idade: ' . $pet["idade"] . ' anos</small>';
                    } else {
                        echo '<small class="text-body-secondary">Idade não informada</small>';
                    }
                    echo '    </div>';

                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col text-center">';
                echo '<p class="fs-5 mt-4">Você ainda não tem pets favoritados</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>