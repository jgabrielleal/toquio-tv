<?php
require('../../connect.php');
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../?a=nao-logado');
	exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="content-language" content="pt-br, en-US, jp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Gabriel ~ Suzuh">
    <meta name="description" content="Sistema de gerenciamento do site da Toquio TV">
    <meta name="keywords" content="gerenciamento, gerencia, administração, painel, webtv">
    <meta name="robots" content="no-index">
    <meta name="copyright" content="© Toquio TV">
    <link rel="shortcut icon" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/image/favicon.png">
    <title>Toquio TV - Painel Sakurajima</title>
    <!--sakurajima stylesheet--> 
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/style/sakurajima_system.css">
    <!--bootstrap--> 
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--animate--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm col-md col-lg col-xl">

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="dashboard"><img src="https://i.imgur.com/dzMi8lU.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="schedule?p=list"><i class="bi bi-calendar2-event-fill"></i>&nbsp;Programação</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="original?p=list"><i class="bi bi-star-fill"></i>&nbsp;Originais</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-gear-fill"></i>&nbsp;Configurações
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="user?p=list"><i class="bi bi-people-fill"></i>&nbsp;Gerenciar usuários</a>
          <a class="dropdown-item" href="personalize"><i class="bi bi-brush-fill"></i>&nbsp;Gerenciar aparência</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

</div>
</div>
</div>