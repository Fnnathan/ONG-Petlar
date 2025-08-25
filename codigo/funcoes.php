<?php
function salvarAnimais($conexao, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso,$tb_usuario_idUsuario ){

    $sql = "INSERT INTO tb_pet (nome, endereco_pet, tipo, raca, porte, idade, peso, tb_usuario_idUsuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssssidi', $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso, $tb_usuario_idUsuario );

    mysqli_stmt_execute($comando);

    // retorna o valor do id que acabou de ser inserido
    $idPet = mysqli_stmt_insert_id($comando);
    
    mysqli_stmt_close($comando);
    
    return $idPet;

};

function editarAnimais($conexao, $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso ){
   
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


function removerAnimais($conexao,$idPet){
$sql = "DELETE FROM tb_pet WHERE idPet = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idPet);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
    return $funcionou; //true ou false
};
    
function salvarUsuario($conexao,$nome, $email, $senha, $endereco_usuario, $telefone){
    $sql= "INSERT INTO tb_usuario (nome, email, senha, endereco_usuario, telefone) VALUES (?,?,?,?)";
    $comando = mysqli_prepare($conexao, $sql);
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $email, $senha, $endereco_usuario, $telefone);
    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    return $funcionou;
};


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

function pesquisarTipos($conexao, $tipo){

    $sql = "SELECT * FROM tb_pet WHERE tipo= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $tipo);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $tipos = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $tipos;

};

function pesquisarRacas($conexao, $raca){

    $sql = "SELECT * FROM tb_pet WHERE raca= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $raca);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $racas = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $racas;

    };

function pesquisarPortes($conexao, $porte){

    $sql = "SELECT * FROM tb_pet WHERE porte= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $porte);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $portes = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $portes;
    };



function pesquisarIdade($conexao, $idade){
    
    $sql = "SELECT * FROM tb_pet WHERE idade= ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idade);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $idades = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $idades;
    };







?>