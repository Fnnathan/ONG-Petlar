<?php
function salvarAnimais($conexao, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso)
{

    $sql = "INSERT INTO tb_pet (nome, endereco_pet, tipo, raca, porte, idade, peso, tb_usuario_idUsuario) VALUES (?, ?, ?, ?, ?, ?, ? )";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssssidi', $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso);

    mysqli_stmt_execute($comando);

    // retorna o valor do id que acabou de ser inserido
    $idPet = mysqli_insert_id($conexao);

    mysqli_stmt_close($comando);

    return $idPet;
};

function editarAnimais($conexao, $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso)
{

    $sql = "UPDATE tb_pet SET nome=?, endereco_pet=?, tipo=?, raca=?, porte=?, idade=?, peso=? WHERE idPet=?";
    $comando = mysqli_prepare($conexao, $sql);

    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
    mysqli_stmt_bind_param($comando, 'sssssidi', $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso, $idPet);


    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
};


function removerAnimais($conexao, $idPet)
{
    $sql = "DELETE FROM tb_pet WHERE idPet = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idPet);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    return $funcionou; //true ou false
};

function salvarUsuario($conexao, $nome, $email, $senha, $endereco_usuario, $telefone)
{
    $sql = "INSERT INTO tb_usuario (nome, email, senha, endereco_usuario, telefone) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($comando, "ssssi", $nome, $email, $senha_hash, $endereco_usuario, $telefone);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}


function listarAnimais($conexao)
{
    $sql = "SELECT * FROM tb_pet";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_animais = [];
    while ($pet = mysqli_fetch_assoc($resultado)) {
        $lista_animais[] = $pet;
    }

    mysqli_stmt_close($comando);
    return $lista_animais;
};

function listarFotos($conexao)
{
    $sql = "SELECT * FROM tb_foto";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_foto = [];
    while ($foto = mysqli_fetch_assoc($resultado)) {
        $lista_foto[] = $foto;
    }

    mysqli_stmt_close($comando);
    return $lista_foto;
};

function pesquisarTipos($conexao, $tipo)
{

    $sql = "SELECT * FROM tb_pet WHERE tipo= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $tipo);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $tipos = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $tipos;
};

function pesquisarRacas($conexao, $raca)
{

    $sql = "SELECT * FROM tb_pet WHERE raca= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $raca);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $racas = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $racas;
};

function pesquisarPortes($conexao, $porte)
{

    $sql = "SELECT * FROM tb_pet WHERE porte= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $porte);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $portes = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $portes;
};



function pesquisarIdade($conexao, $idade)
{

    $sql = "SELECT * FROM tb_pet WHERE idade= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idade);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $idades = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $idades;
};

function verificarLogin($conexao, $email, $senha)
{
    $sql = "SELECT * FROM tb_usuario WHERE email = ?";

    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 's', $email);

    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);
    $quantidade = mysqli_num_rows($resultado);

    $iduser = 0;
    if ($quantidade != 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        $senha_banco = $usuario['senha'];

        if (password_verify($senha, $senha_banco)) {
            $iduser = $usuario['idUsuario'];
        }
    }
    return $iduser;
}

function pegarDadosUsuario($conexao, $idUsuario)
{
    $sql = "SELECT nome, email, endereco_usuario, telefone, foto FROM tb_usuario WHERE idUsuario = ?";

    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'i', $idUsuario);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);
    $quantidade = mysqli_num_rows($resultado);

    if ($quantidade != 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    } else {
        return 0;
    }
}

function pegarFavoritos($conexao, $idUsuario)
{
    $sql = "SELECT 
                p.idPet,
                p.nome,
                p.endereco_pet,
                p.raca,
                p.idade,
                fto.nome AS foto
            FROM tb_pet AS p
            INNER JOIN tb_favoritos AS fav ON fav.tb_pet_idPet = p.idPet
            LEFT JOIN tb_foto AS fto ON fto.tb_pet_idPet = p.idPet
            WHERE fav.tb_usuario_idUsuario = ?";

    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'i', $idUsuario);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $favoritos = [];
    while ($pet = mysqli_fetch_assoc($resultado)) {
        $favoritos[] = $pet;
    }

    mysqli_stmt_close($comando);
    return $favoritos;
}

