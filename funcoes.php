<?php
function cadastrarAnimais($conexao){};

function editarAnimais($conexao){};

function removerAnimais($conexao){};

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
};

function listarTipos($conexao){
    $sql = "SELECT * FROM tb_pet  WHERE $tipo == $tipo ";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);
};

function listarRaças($conexao){};


function listarPortes($conexao){};


function listarIdade($conexao){};





fggug





?>