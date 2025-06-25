<?php
function cadastrarAnimais($conexao){};

function editarAnimais($conexao){};

function removerAnimais($conexao,$idPet){
$sql = "DELETE FROM tb_pet WHERE idPet = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idPet);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
    return $funcionou; //true ou false
};
    
function cadastrarUsuario($conexao,$nome, $email, $senha, $endereco_usuario, $telefone){
    $sql= "INSERT INTO tb_usuario (nome, email, senha, endereco_usuario, telefone) VALUES (?,?,?,?)";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $email, $senha, $endereco_usuario, $telefone);
    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    return $funcionou;
};

function logarUsuario($conexao){};

function listarAnimais($conexao){
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

function listarTipos($conexao){
    $sql = "SELECT * FROM tb_pet  WHERE tipo= ? ";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    mysqli_stmt_bind_param($comando, 's', $tipo);

    $lista_tipos = [];
    while ($tipos = mysqli_fetch_assoc($resultado)) {
        $lista_tipos[] = $tipos;
    }
    mysqli_stmt_close($comando);
    return $lista_tipos;
};

function listarRaças($conexao){};
    $sql = "SELECT * FROM tb_pet  WHERE raca= ? ";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 's', $raca);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_tipos = [];
    while ($tipos = mysqli_fetch_assoc($resultado)) {
        $lista_racas[] = $racas;
    }
    mysqli_stmt_close($comando);
    return $lista_racas;


function listarPortes($conexao){};
    $sql = "SELECT * FROM tb_pet"


function listarIdade($conexao){};



?>