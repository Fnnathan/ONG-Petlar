<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar animais</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>endereco_pet</td>
            <td>tipo</td>
            <td>raca</td>
            <td>Porte</td>
            <td>Idade</td>
            <td>Peso</td>
            <td colspan="2">Ação</td>
        </tr>
            <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM tb_pet";

                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idproduto'];
                    $nome = $linha['nome'];
                    $endereco_pet = $linha['endereco_pet'];
                    $tipo = $linha['tipo'];
                    $raca = $linha['raca'];
                    $porte = $linha['porte'];
                    $idade = $linha['idade'];
                    $peso = $linha['peso'];
                   


                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$endereco_pet</td>";
                    echo "<td>$tipo</td>";
                    echo "<td>$raca</td>";
                    echo "<td>$porte</td>";
                    echo "<td>$idade</td>";
                    echo "<td>$peso</td>";
                    echo "<td><a href='deletarProduto.php?id=$id'>Excluir</a></td>";
                    echo "<td><a href='formProduto.php?id=$id'>Editar</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>