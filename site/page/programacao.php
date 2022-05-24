<?php 
include('../archive/header.php');
require('../../connect.php');
?>
<div class="container-fluid">
    

<div class="programacao-block row justify-content-center">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0 mt-lg-5 mt-sm-3">
<h6 class="title-blue text-center mt-5">Segunda a Sexta</h6>
<section class="programacao mt-5 mb-3 justify-content-center">
<?php
$busca_programa = 'SELECT * FROM schedule WHERE periodo="semana" ORDER BY horario_sistema DESC';
$query_programa = mysqli_query($conexao, $busca_programa);
while($programa = mysqli_fetch_array($query_programa)){
?>
<div><h6><?php echo $programa['programa']; ?></h6><h6><?php echo $programa['horario_site']; ?></h6><img src="<?php echo $programa['banner']; ?>"></div>
<?php } ?>
</section>
</div>
</div>

<div class="programacao-block row justify-content-center">
<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 p-lg-0 mt-sm-3">
<h6 class="title-blue text-center mt-5">Sábado e Domingo</h6>
<section class="programacao mt-5 mb-5 justify-content-center">
<?php
$busca_programa = 'SELECT * FROM schedule WHERE periodo="fim de semana" ORDER BY horario_sistema DESC';
$query_programa = mysqli_query($conexao, $busca_programa);
while($programa = mysqli_fetch_array($query_programa)){
?>
<div><h6><?php echo $programa['programa']; ?></h6><h6><?php echo $programa['horario_site']; ?></h6><img src="<?php echo $programa['banner']; ?>"></div>
<?php } ?>

</div>
</div>


</div>
<?php 
include('../archive/footer.php'); 
?>
