<?php 
require('../../connect.php');

if($_GET['valid'] == "player"){
    $id = "1";
    $personalize_01 = mysqli_real_escape_string($conexao, $_POST['personalize_01']);
    $personalize_02 = mysqli_real_escape_string($conexao, $_POST['personalize_02']);

    $atualiza = "UPDATE personalize SET personalize_01='$personalize_01', personalize_02='$personalize_02' WHERE id='{$id}'";
    if(mysqli_query($conexao, $atualiza)){
        header('Location: ../system/personalize?a=player-send');
    }else{
        header('Location: ../system/personalize?a=erro');
    }
}

if($_GET['valid'] == "originais"){
    $id = "2";
    $personalize_01 = mysqli_real_escape_string($conexao, $_POST['personalize_01']);

    $atualiza = "UPDATE personalize SET personalize_01='$personalize_01' WHERE id='{$id}'";
    if(mysqli_query($conexao, $atualiza)){
        header('Location: ../system/personalize?a=originais-send');
    }else{
        header('Location: ../system/personalize?a=erro');
    }
}


if($_GET['valid'] == "sobre"){
    $id = "3";
    $personalize_01 = mysqli_real_escape_string($conexao, $_POST['personalize_01']);

    $atualiza = "UPDATE personalize SET personalize_01='$personalize_01' WHERE id='{$id}'";
    if(mysqli_query($conexao, $atualiza)){
        header('Location: ../system/personalize?a=sobre-send');
    }else{
        header('Location: ../system/personalize?a=erro');
    }
}