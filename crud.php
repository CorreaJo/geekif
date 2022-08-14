<?php

$conexao = mysqli_connect('localhost', 'root', '', 'geekif');
if(!$conexao){
    die("[ERRO]: ".mysqli_connect_error());
}

function createAtracao($nome, $descricao, $imagem){
    $conexao = $GLOBALS['conexao'];

    $imagem = base64_encode($imagem);

    $insert = "INSERT INTO atracao (nome, descricao, imagem) VALUES ('$nome', '$descricao', '$imagem')";
    $query = mysqli_query($conexao, $insert);

    if(!$query){
        die(mysqli_error($conexao));
    }

    return ;
}


function readAtracao(){
    $conexao = $GLOBALS['conexao'];

    $select = "SELECT * FROM atracao";
    $query = mysqli_query($conexao, $select);

    if(!$query){
        die(mysqli_error($conexao));
    } else{
        $row = mysqli_fetch_assoc($query);
        return $row;
    }
}


function updateAtracao(){

}


function deleteAtracao(){

}


?>