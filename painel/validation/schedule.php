<?php
require('../../connect.php');

if($_GET['valid'] == "creat"){
    $programa = mysqli_real_escape_string($conexao, $_POST['programa']);
    $banner = mysqli_real_escape_string($conexao, $_POST['banner']);
    $horario_site = mysqli_real_escape_string($conexao, $_POST['horario_site']);
    $horario_sistema = mysqli_real_escape_string($conexao, $_POST['horario_sistema']);
    $periodo = mysqli_real_escape_string($conexao, $_POST['periodo']);
    $destaque = "não";

    $cadastra = "INSERT INTO schedule(programa, banner, horario_site, horario_sistema, periodo, destaque) VALUES ('$programa', '$banner', '$horario_site', '$horario_sistema', '$periodo', '$destaque')";
    if(mysqli_query($conexao, $cadastra)){
        header('Location: ../system/schedule?p=creat&a=send');
    }else{
        header('Location: ../system/schedule?p=creat&a=erro');
    }
}

if($_GET['valid'] == "edit"){
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $programa = mysqli_real_escape_string($conexao, $_POST['programa']);
    $banner = mysqli_real_escape_string($conexao, $_POST['banner']);
    $horario_site = mysqli_real_escape_string($conexao, $_POST['horario_site']);
    $horario_sistema = mysqli_real_escape_string($conexao, $_POST['horario_sistema']);
    $periodo = mysqli_real_escape_string($conexao, $_POST['periodo']);
    $destaque = mysqli_real_escape_string($conexao, $_POST['destaque']);

    $busca_schedule = "SELECT * FROM schedule WHERE id='{$id}'";
    $query_schedule = mysqli_query($conexao, $busca_schedule);
    $schedule = mysqli_fetch_array($query_schedule);

    if(empty($horario_sistema)){
        $horario_sistema = $schedule['horario_sistema'];
    }

    if(empty($destaque)){
        $destaque = $schedule['destaque'];
    }

    if(empty($periodo)){
        $periodo = $schedule['periodo'];
    }

    $edita = "UPDATE schedule SET programa='$programa', banner='$banner', horario_site='$horario_site', horario_sistema='$horario_sistema', periodo='$periodo', destaque='$destaque' WHERE id='{$id}'";
    if(mysqli_query($conexao, $edita)){
        header("Location: ../system/schedule?p=edit&v=$id&a=send");
    }else{
        header("Location: ../system/schedule?p=edit&v=$id&a=erro");
    }
}


if($_GET['valid'] == "delete"){
    $id = mysqli_real_escape_string($conexao, $_GET['v']);
            
    $delete_schedule = "DELETE FROM schedule WHERE id='{$id}'";
    
    if(mysqli_query($conexao, $delete_schedule)){
        header("Location: ../system/schedule?p=list&a=send");
    }else{
        header("Location: ../system/schedule?p=list&a=erro");
    }
    }