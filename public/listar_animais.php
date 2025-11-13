<?php
session_start();
if (isset($_SESSION['logado'])) {
    $idUsuario = $_SESSION['idUsuario'];
}
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

    <?php
    require_once "../controle/conexao.php";
    require_once "../controle/funcoes.php";

    $lista_animais = listarAnimais($conexao);
    ?>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach ($lista_animais as $animais) {
                $idPet = $animais['idPet'];
                $nome = $animais['nome'];
                $endereco_pet = $animais['endereco_pet'];
                $tipo = $animais['tipo'];
                $raca = $animais['raca'];
                $porte = $animais['porte'];
                $idade = $animais['idade'];
                $peso = $animais['peso'];

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
                            data-nome="<?php echo $nome; ?>"
                            data-endereco="<?php echo $endereco_pet; ?>"
                            data-tipo="<?php echo $tipo; ?>"
                            data-raca="<?php echo $raca; ?>"
                            data-porte="<?php echo $porte; ?>"
                            data-idade="<?php echo $idade; ?>"
                            data-peso="<?php echo $peso; ?>"
                            data-foto="./assets/<?php echo $foto_pet[0]['nome']; ?>">
                            <img class="card_pet card-img-top" src="./assets/<?php echo $foto_pet[0]['nome']; ?>" alt="<?php echo $nome; ?>">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nome; ?></h5>
                            <p class="card-text"><strong>Endereço:</strong> <?php echo $endereco_pet; ?></p>
                            <p class="card-text"><strong>Tipo:</strong> <?php echo $tipo; ?></p>
                            <p class="card-text"><strong>Raça:</strong> <?php echo $raca; ?></p>
                            <p class="card-text"><strong>Porte:</strong> <?php echo $porte; ?></p>
                            <p class="card-text"><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
                            <p class="card-text"><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

    
    <div class="modal fade" id="modalPet" tabindex="-1" aria-labelledby="modalPetLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPetLabel">Detalhes do Pet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 text-center">
                            <img id="modalFoto" src="" alt="Foto do Pet" class="img-fluid rounded mb-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script>
        // === Abrir Modal ===
        document.querySelectorAll('.abrirModalPet').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const idPet = this.dataset.id;
                document.getElementById('modalNome').textContent = this.dataset.nome;
                document.getElementById('modalEndereco').textContent = this.dataset.endereco;
                document.getElementById('modalTipo').textContent = this.dataset.tipo;
                document.getElementById('modalRaca').textContent = this.dataset.raca;
                document.getElementById('modalPorte').textContent = this.dataset.porte;
                document.getElementById('modalIdade').textContent = this.dataset.idade;
                document.getElementById('modalPeso').textContent = this.dataset.peso;
                document.getElementById('modalFoto').src = this.dataset.foto;

                const btnFav = document.getElementById('btnFavoritarModal');
                btnFav.setAttribute('data-id', idPet);
                btnFav.innerHTML = '<i class="fa-regular fa-heart"></i>';

                const modal = new bootstrap.Modal(document.getElementById('modalPet'));
                modal.show();
            });
        });

        // === Favoritar direto nos cards ===
        document.querySelectorAll('.heart-icon').forEach(heart => {
            heart.addEventListener('click', function(e) {
                e.preventDefault();
                const idPet = this.dataset.id;
                const icone = this.querySelector('i');

                // Troca visual do ícone
                icone.classList.toggle('fa-regular');
                icone.classList.toggle('fa-solid');

                // Faz a requisição para favoritar
                fetch(`../controle/favoritar.php?idUsuario=<?php echo $idUsuario; ?>&idPet=${idPet}`)
                    .then(response => {
                        if (!response.ok) throw new Error('Erro ao favoritar');
                    })
                    .catch(error => console.error(error));
            });
        });

        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
