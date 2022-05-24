<?php include('../archive/sakurajima_header.php'); ?>
<div class="container mt-3">

<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<?php include('../archive/sakurajima_side.php'); ?>
</div>

<div class="col-sm col-md col-lg col-xl  mt-2 mt-lg-0">
<section class="conteudo p-3">
<h6 class="pl-2 pt-2 pb-2"><i class="bi bi-calendar2-event-fill"></i>&nbsp;Programação</h6>

<!--CRIAR PROGRAMA--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "creat"){ ?>  

<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Programa criado com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>

<form method="POST" action="../validation/schedule?valid=creat" class="mt-3">
  <div class="form-group">
    <label>Programa</label>
    <input name="programa" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o nome do programa completo.</small>
  </div>
  <div class="form-group">
    <label>Banner do programa</label>
    <input name="banner" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Horário site</label>
    <input name="horario_site" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite os horários de transmissão do programa para ser exibido no site</small>
  </div>
  <div class="form-group">
    <label>Horário sistema</label>
    <input name="horario_sistema" type="time" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o horário para organização da grade.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Período de transmissão</label>
    <select name="periodo" class="form-control shadow-none border-0 w-50">
      <option></option>
      <option>semana</option>
      <option>fim de semana</option>
    </select>
    <small id="emailHelp" class="form-text text-white">Selecione o período da semana de transmissão.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">CRIAR</button>
</form>
<?php } ?>
<!--CRIAR PROGRAMA--> 

<!--EDITAR PROGRAMA--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "edit"){ ?>
<?php 
$id = mysqli_real_escape_string($conexao, $_GET['v']);
$busca_programa = "SELECT * FROM schedule WHERE id='{$id}'";
$query_programa = mysqli_query($conexao, $busca_programa);
$programa = mysqli_fetch_array($query_programa);
?>

<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Programa editado com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>

<form method="POST" action="../validation/schedule?valid=edit" class="mt-3">
<input name="id" type="text" class="d-none form-control shadow-none border-0 w-50" value="<?php echo $programa['id']; ?>">
  <div class="form-group">
    <label>Programa</label>
    <input name="programa" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $programa['programa']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite o nome do programa completo.</small>
  </div>
  <div class="form-group">
    <label>Banner do programa</label>
    <input name="banner" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $programa['banner']; ?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL da imagem com a extensão no final do URL.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Horário site</label>
    <input name="horario_site" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $programa['horario_site']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite os horários de transmissão do programa para ser exibido no site</small>
  </div>
  <div class="form-group">
    <label>Horário sistema</label>
    <input name="horario_sistema" type="time" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o horário para organização da grade. ( Deixe em branco caso não deseje alterações )</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Período de transmissão</label>
    <select name="periodo" class="form-control shadow-none border-0 w-50">
      <option></option>
      <option>semana</option>
      <option>fim de semana</option>
    </select>
    <small id="emailHelp" class="form-text text-white">Selecione o período da semana de transmissão. ( Deixe em branco caso não deseje alterações )</small>
  </div>
  <div class="form-group">
    <label>Destaque</label>
    <select name="destaque" class="form-control shadow-none border-0 w-50">
    <option></option>
    <option>sim</option>
    <option>não</option>
    </select>
    <small id="emailHelp" class="form-text text-white">Escolha uma das opções se desejar deixar esse programa como destaque. ( Deixe em branco caso não deseje alterações )</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>
<?php } ?>
<!--EDITAR PROGRAMA--> 

<!--LISTA DE TODOS OS PROGRAMAS-->
<?php if(isset($_GET['p']) && $_GET['p'] == "list"){ ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Programa excluido com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
<a href="schedule?p=creat"><button type="button" class="btn btn-danger shadow-none border-0 mt-3"><i class="bi bi-asterisk"></i>&nbsp;Criar um novo programa</button></a>
<hr class="border-white">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col"><i class="bi bi-tv-fill"></i>&nbsp;Programa</th>
      <th scope="col"><i class="bi bi-clock-fill"></i>&nbsp;Horário</th>
      <th scope="col"><i class="bi bi-star-fill"></i>&nbsp;Destaque</th>
      <th scope="col"><i class="bi bi-star-fill"></i>&nbsp;Período</th>
      <th scope="col"><i class="bi bi-hand-index-fill"></i>&nbsp;Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $busca_schedule = "SELECT * FROM schedule ORDER BY id DESC";
    $query_schedule = mysqli_query($conexao, $busca_schedule);
    while($schedule = mysqli_fetch_array($query_schedule)){
    ?>
    <tr>
      <td class="pt-3 w-25"><?php echo $schedule['programa']; ?></td>
      <td class="pt-3 w-25"><?php echo $schedule['horario_site']; ?></td>
      <td class="pt-3 "><?php echo $schedule['destaque']; ?></td>
      <td class="pt-3"><?php echo $schedule['periodo']; ?></td>
      <td>
      <a href="schedule?p=edit&v=<?php echo $schedule['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-pencil-square"></i></button></a>
      <a href="../validation/schedule?valid=delete&v=<?php echo $schedule['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-trash3-fill"></i></button></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
<!--LISTA DE TODOS OS PROGRAMAS-->

</section>
</div>
</div>


</div>
<?php include('../archive/sakurajima_footer.php'); ?>
