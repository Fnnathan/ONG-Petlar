<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar animais</title>
    
     <style>
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
            <?php
                require_once "../controle/conexao.php";
                require_once "../controle/funcoes.php";

                    $lista_animais = listarAnimais($conexao);
            ?>
            <table border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>Tipo</td>
                <td>Raça</td>
                <td>Porte</td>
                <td>Idade</td>
                <td>Peso</td>
                <td>Foto</td>
            </tr>

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
                    $foto = $animais['foto'];

            echo "<tr>";
            echo "<td>$idPet</td>";
            echo "<td>$nome</td>";
            echo "<td>$endereco_pet</td>";
            echo "<td>$tipo</td>";
            echo "<td>$raca</td>";
            echo "<td>$porte</td>";
            echo "<td>$idade</td>";
            echo "<td>$peso</td>";
            echo "<td><img src='fotos/$foto'></td>";
            echo "</tr>";
        }
    
        ?>
        
</body>
</html>