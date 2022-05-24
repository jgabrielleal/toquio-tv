<?php 
session_start();
require('../../connect.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query_user = "SELECT * FROM usuario WHERE usuario='{$usuario}' and senha='{$senha}'";
$busca_user = mysqli_query($conexao, $query_user);
$row_user = mysqli_num_rows($busca_user);


if($row_user == "1"){
    $_SESSION['usuario'] = $usuario;
    header('location: ../system/dashboard');
    exit();
}else{
    $_SESSION['nao_autenticado'] = "true";
    header('location: ../?a=erro');
}