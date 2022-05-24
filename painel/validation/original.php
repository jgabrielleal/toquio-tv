<?php 
require('../../connect.php');

if($_GET['valid'] == "creat"){
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
    $destaque = "não";
    
    $cadastra = "INSERT INTO original(nome, endereco, destaque) VALUES ('$nome', '$endereco', '$destaque')";
    if(mysqli_query($conexao, $cadastra)){
        header('Location: ../system/original?p=creat&a=send');
    }else{
        header('Location: ../system/original?p=creat&a=erro');
    }
}


if($_GET['valid'] == "edit"){
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
    $destaque = mysqli_real_escape_string($conexao, $_POST['destaque']);

    $busca_origin = "SELECT * FROM original WHERE id='{$id}'";
    $query_origin = mysqli_query($conexao, $busca_origin);
    $origin = mysqli_fetch_array($query_origin);

    if(empty($destaque)){
        $destaque = $origin['destaque'];
    }
    
    $edita = "UPDATE original SET nome='$nome', endereco='$endereco', destaque='$destaque' WHERE id='{$id}'";
    if(mysqli_query($conexao, $edita)){
        header("Location: ../system/original?p=edit&v=$id&a=send");
    }else{
        header("Location: ../system/original?p=edit&v=$id&a=erro");
    }
}

if($_GET['valid'] == "delete"){
    $id = mysqli_real_escape_string($conexao, $_GET['v']);
            
    $delete_original = "DELETE FROM original WHERE id='{$id}'";
    
    if(mysqli_query($conexao, $delete_original)){
        header("Location: ../system/original?p=list&a=send");
    }else{
        header("Location: ../system/original?p=list&a=erro");
    }
}
            
        