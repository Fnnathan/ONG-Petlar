<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar animais</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
    require_once "../controle/conexao.php";
    require_once "../controle/funcoes.php";

    $lista_animais = listarAnimais($conexao);
    $lista_foto = listarFotos($conexao);
?>

<h1>Lista de Animais</h1>

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
    <div class="card h-100">
        <img class="card_pet" src="./assets/<?php echo $foto_pet[0]; ?>" class="card-img-top" alt="<?php echo $nome; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $nome; ?></h5>
            <p class="card-text"><strong>Endereço:</strong> <?php echo $endereco_pet; ?></p>
            <p class="card-text"><strong>Tipo:</strong> <?php echo $tipo; ?></p>
            <p class="card-text"><strong>Raça:</strong> <?php echo $raca; ?></p>
            <p class="card-text"><strong>Porte:</strong> <?php echo $porte; ?></p>
            <p class="card-text"><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
            <p class="card-text"><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>
</div>


<?php
    } 
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
