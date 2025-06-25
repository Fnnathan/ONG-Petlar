<?php
function salvarAnimais($conexao, $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso ){

    $sql = "INSERT INTO tb_pet (idPet, nome, endereco_pet, tipo, raca, porte, idade, peso) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'isssssid', $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso );

    $funcionou = mysqli_stmt_execute($comando);

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
    mysqli_stmt_bind_param($comando, 'sssssid',  $idPet, $nome, $endereco_pet, $tipo, $raca, $porte, $idade, $peso );
    

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

function listarRaças($conexao, $raca){

    $sql = "SELECT * FROM tb_pet  WHERE raca= ? ";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 's', $raca);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_racas = [];
    while ($raca = mysqli_fetch_assoc($resultado)) {
        $lista_racas[] = $racas;
    }
    mysqli_stmt_close($comando);
    return $lista_racas;

    };

function listarPortes($conexao, $porte){

    $sql = "SELECT * FROM tb_pet WHERE porte= ? ";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param(comando, 's', $porte);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_portes = [];
    while ($porte = mysqli_fetch_assoc($resultado)) {
        $lista_portes[] = $portes; 
    }
    mysqli_stmt_close($comando);
    return $lista_portes;

    };



function listarIdade($conexao, $idade){
    
    $sql = "SELECT * FROM tb_pet WHERE idade= ? ";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param(comando, 's', $idade);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_idades = [];
    while ($idade = mysqli_fetch_assoc($resultado)) {
        $lista_idades[] = $idades; 
    }
    mysqli_stmt_close($comando);
    return $lista_idades;

    };







?>