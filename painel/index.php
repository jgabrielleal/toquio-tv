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
    <!--toquio tv stylesheet--> 
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/style/sakurajima_login.css">
    <!--bootstrap--> 
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/style/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--animate--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--google font--> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">

<div class="row justify-content-center mt-5">
<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
<section>
<img class="w-100 p-2 p-lg-5 mt-n2" src="https://i.imgur.com/pPTkq1o.png">
</section>
<section class="area-login p-3 p-lg-4 mt-3 mt-lg-0">
<form method="POST" action="validation/login">
  <div class="form-group">
    <label><i class="bi bi-person-circle"></i>&nbsp;Usuário</label>
    <input name="usuario" type="text" class="shadow-none form-control border-0" placeholder="yvoonie">
  </div>
  <div class="form-group">
    <label><i class="bi bi-key"></i>&nbsp;Senha</label>
    <input name="senha" type="password" class="shadow-none form-control border-0" placeholder="******">
  </div>
  <button type="submit" class="btn mt-2 w-100"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Entrar</button>
</form>
</section>
</div>

</div>


<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
<div class="container">
<div class="row justify-content-center mt-3">
<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="alert alert-light text-center" role="alert">
<i class="bi bi-emoji-frown-fill"></i>&nbsp;Login ou senha inválido
</div>
</div>
</div>
</div>
<?php } ?>

<?php if(isset($_GET['a']) && $_GET['a'] == "nao-logado"){ ?>
<div class="container">
<div class="row justify-content-center mt-3">
<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
<div class="alert alert-light text-center" role="alert">
<i class="bi bi-emoji-angry-fill"></i>&nbsp;Você não está logado
</div>
</div>
</div>
</div>
<?php } ?>


<div class="container fixed-bottom mb-3">
<div class="row justify-content-center">
<div class="col-auto">
<div class="d-block mx-auto"><a href="https://twitter.com/Kidztaku" title="Webmaster Twitter"><img class="credits" src="https://i.imgur.com/GAfyWpQ.png"></a></div>
</div>
</div>
</div>

<!--jquery--> 
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/jquery/jquery-3.6.0.min.js"></script>
<!--bootstrap javascript-->
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/javascript/bootstrap.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/javascript/bootstrap.bundle.min.js"></script>
</body>
</html>
