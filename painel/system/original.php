<?php include('../archive/sakurajima_header.php'); ?>
<div class="container mt-3">

<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<?php include('../archive/sakurajima_side.php'); ?>
</div>

<div class="col-sm col-md col-lg col-xl  mt-2 mt-lg-0">
<section class="conteudo p-3">
<h6 class="pl-2 pt-2 pb-2"><i class="bi bi-star-fill"></i>&nbsp;Originais</h6>

<!--CRIAR ORIGINAL--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "creat"){ ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Original criado com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
<form method="POST" action="../validation/original?valid=creat" class="mt-3">
  <div class="form-group">
    <label>Nome do vídeo</label>
    <input name="nome" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o nome do vídeo para identificação dentro do sistema.</small>
  </div>
  <div class="form-group">
    <label>URL do vídeo</label>
    <input name="endereco" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Cole o URL do vídeo upado no RUMBLE.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>
<?php } ?>
<!--CRIAR ORIGINAL--> 

<!--EDITAR ORIGINAL--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "edit"){ ?>
<?php 
$id = mysqli_real_escape_string($conexao, $_GET['v']);
$busca_origin = "SELECT * FROM original WHERE id='{$id}'";
$query_origin = mysqli_query($conexao, $busca_origin);
$origin = mysqli_fetch_array($query_origin);
?>
<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Original editado com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
<form method="POST" action="../validation/original?valid=edit" class="mt-3">
<input name="id" type="text" class="d-none form-control shadow-none border-0 w-50" value="<?php echo $origin['id'];?>">
  <div class="form-group">
    <label>Nome do vídeo</label>
    <input name="nome" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $origin['nome'];?>">
    <small id="emailHelp" class="form-text text-white">Digite o nome do vídeo para identificação dentro do sistema.</small>
  </div>
  <div class="form-group">
    <label>URL do vídeo</label>
    <input name="endereco" type="text" class="form-control shadow-none border-0 w-50"  value="<?php echo $origin['endereco'];?>">
    <small id="emailHelp" class="form-text text-white">Cole o URL do vídeo upado no RUMBLE.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Destaque</label>
    <select name="destaque" class="form-control shadow-none border-0 w-50">
    <option></option>
    <option>sim</option>
    <option>não</option>
    </select>
    <small id="emailHelp" class="form-text text-white">Escolha uma das opções se desejar deixar esse original como destaque. ( Deixe em branco caso não deseje alterações )</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>
<?php } ?>
<!--EDITAR ORIGINAL--> 

<!--LISTA DE ORIGINAIS--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "list"){ ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Original excluido com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
<a href="original?p=creat"><button type="button" class="btn btn-danger shadow-none border-0 mt-3"><i class="bi bi-asterisk"></i>&nbsp;Criar um Original</button></a>
<hr class="border-white">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col"><i class="bi bi-tv-fill"></i>&nbsp;Nome do vídeo</th>
      <th scope="col"><i class="bi bi-star-fill"></i>&nbsp;Destaque</th>
      <th scope="col"><i class="bi bi-hand-index-fill"></i>&nbsp;Ação</th>
    </tr>
  </thead>
  <tbody>
<?php 
$busca_origin = "SELECT * FROM original ORDER BY id DESC";
$query_origin = mysqli_query($conexao, $busca_origin);
while($origin = mysqli_fetch_array($query_origin)){ 
?>
    <tr>
      <td class="pt-3"><?php echo $origin['nome'];?></td>
      <td class="pt-3"><?php echo $origin['destaque'];?></td>
      <td>
      <a href="original?p=edit&v=<?php echo $origin['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-pencil-square"></i></button></a>
      <a href="../validation/original?valid=delete&v=<?php echo $origin['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-trash3-fill"></i></button>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
<?php } ?>
<!--LISTA DE ORIGINAIS--> 

</section>
</div>
</div>


</div>
<?php include('../archive/sakurajima_footer.php'); ?>
