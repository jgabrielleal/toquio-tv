<?php include('../archive/sakurajima_header.php'); ?>
<div class="container mt-3">

<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<?php include('../archive/sakurajima_side.php'); ?>
</div>

<div class="col-sm col-md col-lg col-xl  mt-2 mt-lg-0">
<section class="conteudo p-3">
<h6 class="pl-2 pt-2 pb-2"><i class="bi bi-brush-fill"></i>&nbsp;Gerenciar aparência</h6>

  <?php if(isset($_GET['a']) && $_GET['a'] == "player-send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Personalização do player realizada com sucesso.
    </div>
  <?php } ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "originais-send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Personalização dos originais realizada com sucesso.
    </div>
  <?php } ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "sobre-send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Personalização de sobre realizada com sucesso.
    </div>
  <?php } ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
  <?php } ?>

<a href="../../archive/psd.zip" target="_blank"><button type="button" class="btn btn-secondary mt-2 w-100 shadow-none border-0"><i class="bi bi-cloud-download-fill"></i>&nbsp;Baixar psd's pra editar</button></a>

<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active bg-transparent text-white" id="player-tab" data-toggle="tab" href="#player" role="tab" aria-controls="player" aria-selected="true">Player</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-transparent text-white" id="originais-tab" data-toggle="tab" href="#originais" role="tab" aria-controls="originais" aria-selected="false">Originais</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-transparent text-white" id="sobre-tab" data-toggle="tab" href="#sobre" role="tab" aria-controls="sobre" aria-selected="false">Sobre</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="player" role="tabpanel" aria-labelledby="player-tab">

  <?php
  $busca_personalize_one = 'SELECT * FROM personalize WHERE id="1"';
  $query_personalize_one = mysqli_query($conexao, $busca_personalize_one);
  $personalize_one = mysqli_fetch_array($query_personalize_one);
  ?>
  <form method="POST" action="../validation/personalize?valid=player" class="mt-3">
  <div class="form-group">
    <label>Background Direito</label>
    <input name="personalize_01" type="text" class="form-control w-50 shadow-none border-0" value="<?php echo $personalize_one['personalize_01']; ?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <div class="form-group">
    <label>Background Esquerdo</label>
    <input name="personalize_02" type="text" class="form-control w-50 shadow-none border-0" value="<?php echo $personalize_one['personalize_02']; ?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>

  </div>
  <div class="tab-pane fade" id="originais" role="tabpanel" aria-labelledby="originais-tab">

  <?php
  $busca_personalize_two = 'SELECT * FROM personalize WHERE id="2"';
  $query_personalize_two = mysqli_query($conexao, $busca_personalize_two);
  $personalize_two = mysqli_fetch_array($query_personalize_two);
  ?>
  <form method="POST" action="../validation/personalize?valid=originais" class="mt-3">
  <div class="form-group">
    <label>Background</label>
    <input name="personalize_01" type="text" class="form-control w-50 shadow-none border-0" value="<?php echo $personalize_two['personalize_01']; ?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>

  </div>
  <div class="tab-pane fade" id="sobre" role="tabpanel" aria-labelledby="sobre-tab">

  <?php
  $busca_personalize_three = 'SELECT * FROM personalize WHERE id="3"';
  $query_personalize_three = mysqli_query($conexao, $busca_personalize_three);
  $personalize_three = mysqli_fetch_array($query_personalize_three);
  ?>
  <form method="POST" action="../validation/personalize?valid=sobre" class="mt-3">
  <div class="form-group">
    <label>Background</label>
    <input name="personalize_01" type="text" class="form-control w-50 shadow-none border-0" value="<?php echo $personalize_three['personalize_01']; ?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>

  </div>
</div>

</section>
</div>
</div>


</div>
<?php include('../archive/sakurajima_footer.php'); ?>
