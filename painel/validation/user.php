<?php 
require('../../connect.php');


if($_GET['valid'] == "creat"){
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$apelido = mysqli_real_escape_string($conexao, $_POST['apelido']);

$cadastra = "INSERT INTO usuario(usuario, senha, nome, apelido) VALUES ('$usuario', '$senha', '$nome', '$apelido')";
if(mysqli_query($conexao, $cadastra)){
    header('Location: ../system/user?p=creat&a=send');
}else{
    header('Location: ../system/user?p=creat&a=erro');
}
}


if($_GET['valid'] == "edit"){
$id = mysqli_real_escape_string($conexao, $_POST['id']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$apelido = mysqli_real_escape_string($conexao, $_POST['apelido']);
    
$edita = "UPDATE usuario SET usuario='$usuario', senha='$senha', nome='$nome', apelido='$apelido' WHERE id='{$id}'";
if(mysqli_query($conexao, $edita)){
    header("Location: ../system/user?p=edit&v=$id&a=send");
}else{
    header("Location: ../system/user?p=edit&v=$id&a=erro");
}
}

if($_GET['valid'] == "delete"){
$id = mysqli_real_escape_string($conexao, $_GET['v']);
        
$delete_user = "DELETE FROM usuario WHERE id='{$id}'";

if(mysqli_query($conexao, $delete_user)){
    header("Location: ../system/user?p=list&a=send");
}else{
    header("Location: ../system/user?p=list&a=erro");
}
}
        
    
    
    
