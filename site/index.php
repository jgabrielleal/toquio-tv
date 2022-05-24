<?php 
include('archive/header.php');
require('../connect.php');
?>
<div class="container-fluid">

<?php 
$busca_personalize_one = 'SELECT * FROM personalize WHERE id="1"';
$query_personalize_one = mysqli_query($conexao, $busca_personalize_one);
$personalize_one = mysqli_fetch_array($query_personalize_one);
?>
    
<main>
<div class="player-block-one row">
<div class="col-sm col-md col-lg col-xl p-0">
<section class="player-one">
<img src="<?php echo $personalize_one['personalize_01']; ?>">
<img src="<?php echo $personalize_one['personalize_02']; ?>">
</section>
</div>
</div>
<div class="player-block-two row justify-content-center">
<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 p-lg-0 justify-content-center">
<section class="player-two">
<div id="MediaPlayerMiniPlayer"></div>
<div><button class="dark-mode" onclick="darkmode();"><i class="bi bi-moon-stars-fill"></i></button><button class="light-mode" onclick="lightmode();"><i class="bi bi-brightness-high-fill"></i></button></div>
</section>
</div>
</div>
</main>

<div class="destaque-block row">
<div class="col-sm col-md col-lg col-xl p-0">
<section class="destaque-navbar">
<nav class="navbar"><span class="destaque-span mx-auto">destaques</span></nav>
</section>
</div>
</div>
<div class="programacao-block row justify-content-center">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0">
<section class="programacao mt-5 mb-5 justify-content-center">
<?php
$busca_programa = 'SELECT * FROM schedule WHERE destaque="sim" ORDER BY horario_sistema DESC LIMIT 4';
$query_programa = mysqli_query($conexao, $busca_programa);
while($programa = mysqli_fetch_array($query_programa)){
?>
<div><h6><?php echo $programa['programa']; ?></h6><h6><?php echo $programa['horario_site']; ?></h6><img src="<?php echo $programa['banner']; ?>"></div>
<?php } ?>
</section>
</div>
</div>

<?php 
$busca_personalize_two = 'SELECT * FROM personalize WHERE id="2"';
$query_personalize_two = mysqli_query($conexao, $busca_personalize_two);
$personalize_two = mysqli_fetch_array($query_personalize_two);
?>
<div class="originals-block row justify-content-center" style="background-image: url(<?php echo $personalize_two['personalize_01']; ?>);">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0">
<section class="originals mt-5 mb-5">
<h6>Conteúdos Originais</h6>
<div class="mt-5 justify-content-center">
<?php
$busca_original = 'SELECT * FROM original WHERE destaque="sim" ORDER BY id DESC LIMIT 2';
$query_original = mysqli_query($conexao, $busca_original);
while($original = mysqli_fetch_array($query_original)){
?>
<iframe class="rumble" width="640" height="360" src="<?php echo $original['endereco']; ?>" frameborder="0" allowfullscreen></iframe>
<?php } ?>
</div>
</section>
</div>
</div>

<?php 
$busca_personalize_three = 'SELECT * FROM personalize WHERE id="3"';
$query_personalize_three = mysqli_query($conexao, $busca_personalize_three);
$personalize_three = mysqli_fetch_array($query_personalize_three);
?>
<div class="sobre-block row justify-content-center" style="background-image: url(<?php echo $personalize_three['personalize_01']; ?>);">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0">
<section class="sobre mt-5 mb-5">
<h6>Sobre a Toquio TV</h6>
<p class="mt-5">
A Toquio TV nasce em meio a um cenário global caótico, para dizer o mínimo, no que se refere às mídias de streaming, dezenas de plataformas hoje se degladiam nos campos do marketing em busca de assinaturas. 
Este canal não surge para colocar um fim nessa batalha, mas para se tornar uma "terceira via" aos amantes da teledifusão, hoje com a internet disponível em quase todo o planeta, e com ela ganhamos a possibilidade de acesso em cada streaming device que existe!
O objetivo desta emissora é mostrar histórias alternativas aos grandes "hypes", histórias que merecem espaço na mídia independente, seja um anime não tão antigo que foi esquecido no tempo ou um game que precisa ser relembrado, nosso otaku lifestyle vai estar presente 24 horas por dia na #ToquioTV.
</p>
</section>
</div>
</div>

</div>
<?php 
include('archive/footer.php'); 
?>