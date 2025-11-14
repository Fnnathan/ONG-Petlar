<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ./logar.php");
    exit;
}

$idUsuario = $_SESSION['idUsuario'];

require_once "../controle/conexao.php";
require_once "../controle/funcoes.php";

$sql = "SELECT * FROM tb_pet WHERE tb_usuario_idUsuario = $idUsuario";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Animais</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h2 class="mt-4 mb-4">Meus Animais</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php foreach ($resultado as $pet) { ?>

                <?php
                $foto = listarFotos($conexao, $pet['idPet']);
                ?>

                <div class="col">
                    <div class="card h-100">

                        <img class="card-img-top"
                            src="./assets/<?php echo $foto[0]['nome']; ?>"
                            alt="<?php echo $pet['nome']; ?>">

                        <div class="card-body">
                            <h5><?php echo $pet['nome']; ?></h5>

                            <p>Tipo: <?php echo $pet['tipo']; ?></p>
                            <p>Raça: <?php echo $pet['raca']; ?></p>
                            <p>Porte: <?php echo $pet['porte']; ?></p>
                            <p>Idade: <?php echo $pet['idade']; ?> anos</p>
                            <p>Peso: <?php echo $pet['peso']; ?> kg</p>
                        </div>

                        <div class="card-footer d-flex gap-2">
                            <a href="editar_animais.php?idPet=<?php echo $pet['idPet']; ?>"
                                class="btn btn-primary w-50">
                                Editar animal
                            </a>

                            <a href="../controle/deletar_animal.php?id=<?php echo $pet['idPet']; ?>"
                                class="btn btn-danger w-50">
                                Remover animal
                            </a>
                        </div>

                    </div>
                </div>

            <?php } ?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>