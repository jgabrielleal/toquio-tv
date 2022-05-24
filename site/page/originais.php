<?php 
include('../archive/header.php');
require('../../connect.php');
?>
<div class="container-fluid">

<?php 
$busca_personalize_two = 'SELECT * FROM personalize WHERE id="2"';
$query_personalize_two = mysqli_query($conexao, $busca_personalize_two);
$personalize_two = mysqli_fetch_array($query_personalize_two);
?>
<div class="originals-block row justify-content-center" style="background-image: url(<?php echo $personalize_two['personalize_01']; ?>);">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0 mt-4">
<section class="originals mt-5 mb-5">
<h6>Originais em Destaque</h6>
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

<main>
<div class="originals-block originals-block-internal row justify-content-center">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0">
<h6 class="title-red text-center mt-5">Todos os Originais</h6>
<section class="originals mt-5 mb-5">
<div class="mt-5 justify-content-center">
<?php
$busca_original = 'SELECT * FROM original ORDER BY id DESC';
$query_original = mysqli_query($conexao, $busca_original);
while($original = mysqli_fetch_array($query_original)){
?>
<iframe class="rumble" width="640" height="360" src="<?php echo $original['endereco']; ?>" frameborder="0" allowfullscreen></iframe>
<?php } ?>
</div>
</section>
</div>
</div>
</main>

</div>
<?php 
include('../archive/footer.php'); 
?>
