<?php
session_start();
if (isset($_SESSION['logado'])) {
    $idUsuario = $_SESSION['idUsuario'];
}

require_once "../controle/conexao.php";
require_once "../controle/funcoes.php";

$lista_animais = listarAnimais($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Animais</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($lista_animais as $animais) { ?>

                <?php
                $idPet = $animais['idPet'];
                $foto_pet = listarFotos($conexao, $idPet);
                ?>

                <div class="col">
                    <div class="card h-100 position-relative">


                        <a href="../controle/favoritar.php"
                            class="heart-icon position-absolute p-2 text-danger"
                            data-id="<?php echo $idPet; ?>"
                            style="right:10px;top:10px;">
                            <i class="fa-regular fa-heart"></i>
                        </a>


                        <a href=""
                            class="abrirModalPet"
                            data-id="<?php echo $idPet; ?>"
                            data-nome="<?php echo $animais['nome']; ?>"
                            data-endereco="<?php echo $animais['endereco_pet']; ?>"
                            data-tipo="<?php echo $animais['tipo']; ?>"
                            data-raca="<?php echo $animais['raca']; ?>"
                            data-porte="<?php echo $animais['porte']; ?>"
                            data-idade="<?php echo $animais['idade']; ?>"
                            data-peso="<?php echo $animais['peso']; ?>"
                            data-foto="./assets/<?php echo $foto_pet[0]['nome']; ?>"
                            data-dono="<?php echo $animais['nome_usuario']; ?>"
                            data-telefone="<?php echo $animais['telefone_usuario']; ?>">

                            <img class="card_pet card-img-top"
                                src="./assets/<?php echo $foto_pet[0]['nome']; ?>"
                                alt="<?php echo $animais['nome']; ?>">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $animais['nome']; ?></h5>
                            <p class="card-text"><strong>Endereço:</strong> <?php echo $animais['endereco_pet']; ?></p>
                            <p class="card-text"><strong>Tipo:</strong> <?php echo $animais['tipo']; ?></p>
                            <p class="card-text"><strong>Raça:</strong> <?php echo $animais['raca']; ?></p>
                            <p class="card-text"><strong>Porte:</strong> <?php echo $animais['porte']; ?></p>
                            <p class="card-text"><strong>Idade:</strong> <?php echo $animais['idade']; ?> anos</p>
                            <p class="card-text"><strong>Peso:</strong> <?php echo $animais['peso']; ?> kg</p>


                            <p class="card-text">
                                <strong>Responsável:</strong> <?php echo $animais['nome_usuario']; ?><br>
                                <strong>Telefone:</strong> <?php echo $animais['telefone_usuario']; ?>
                            </p>
                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>


    <div class="modal fade" id="modalPet" tabindex="-1" aria-labelledby="modalPetLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPetLabel">Detalhes do Pet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-5 text-center">
                            <img id="modalFoto" src="" class="img-fluid rounded mb-3">
                            <br>
                            <a href="" id="btnFavoritarModal" class="fs-3 text-danger">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>

                        <div class="col-md-7">
                            <h4 id="modalNome"></h4>

                            <p><strong>Endereço:</strong> <span id="modalEndereco"></span></p>
                            <p><strong>Tipo:</strong> <span id="modalTipo"></span></p>
                            <p><strong>Raça:</strong> <span id="modalRaca"></span></p>
                            <p><strong>Porte:</strong> <span id="modalPorte"></span></p>
                            <p><strong>Idade:</strong> <span id="modalIdade"></span> anos</p>
                            <p><strong>Peso:</strong> <span id="modalPeso"></span> kg</p>

                            <hr>

                            <p><strong>Responsável:</strong> <span id="modalDono"></span></p>
                            <p><strong>Telefone:</strong> <span id="modalTelefone"></span></p>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        // Abrir Modal
        document.querySelectorAll('.abrirModalPet').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                document.getElementById('modalNome').textContent = this.dataset.nome;
                document.getElementById('modalEndereco').textContent = this.dataset.endereco;
                document.getElementById('modalTipo').textContent = this.dataset.tipo;
                document.getElementById('modalRaca').textContent = this.dataset.raca;
                document.getElementById('modalPorte').textContent = this.dataset.porte;
                document.getElementById('modalIdade').textContent = this.dataset.idade;
                document.getElementById('modalPeso').textContent = this.dataset.peso;
                document.getElementById('modalFoto').src = this.dataset.foto;

                document.getElementById('modalDono').textContent = this.dataset.dono;
                document.getElementById('modalTelefone').textContent = this.dataset.telefone;

                const btnFav = document.getElementById('btnFavoritarModal');
                btnFav.setAttribute('data-id', this.dataset.id);

                new bootstrap.Modal(document.getElementById('modalPet')).show();
            });
        });

        // Favoritar
        document.querySelectorAll('.heart-icon').forEach(heart => {
            heart.addEventListener('click', function(e) {
                e.preventDefault();

                const idPet = this.dataset.id;
                const icone = this.querySelector('i');

                icone.classList.toggle('fa-regular');
                icone.classList.toggle('fa-solid');

                fetch(`../controle/favoritar.php?idUsuario=<?php echo $idUsuario; ?>&idPet=${idPet}`);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>