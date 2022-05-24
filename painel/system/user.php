<?php include('../archive/sakurajima_header.php'); 
?>
<div class="container mt-3">

<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
<?php include('../archive/sakurajima_side.php'); ?>
</div>

<div class="col-sm col-md col-lg col-xl mt-2 mt-lg-0">
<section class="conteudo p-3">
<h6 class="pl-2 pt-2 pb-2"><i class="bi bi-people-fill"></i>&nbsp;Usuários</h6>


<!--CRIAR USUARIO--> 
<?php if(isset($_GET['p']) && $_GET['p'] == "creat"){ ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Usuário criado com sucesso.
    </div>
  <?php } ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
  <?php } ?>
<form class="mt-3" method="POST" action="../validation/user?valid=creat">
  <div class="form-group">
    <label>Login</label>
    <input name="usuario" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o login para acessar o painel.</small>
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input name="senha" type="password" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite a senha para acessar o painel.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Nome completo</label>
    <input name="nome" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o nome completo pra registro no sistema.</small>
  </div>
  <div class="form-group">
    <label>Apelido</label>
    <input name="apelido" type="text" class="form-control shadow-none border-0 w-50">
    <small id="emailHelp" class="form-text text-white">Digite o apelido para organização no sistema.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Criar</button>
</form>
<?php } ?>
<!--CRIAR USUARIO-->

<!--EDITAR USUARIO-->
<?php if(isset($_GET['p']) && $_GET['p'] == "edit"){ ?>
<?php 
$id = $_GET['v'];
$busca_user = "SELECT * FROM usuario WHERE id='{$id}'";
$query_user = mysqli_query($conexao, $busca_user);
$user = mysqli_fetch_array($query_user);
?>
<?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Usuário editado com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
<form method="POST"  action="../validation/user?valid=edit" class="mt-3">
  <input name="id" type="text" class="d-none form-control shadow-none border-0 w-50" value="<?php echo $_GET['v']; ?>">
  <div class="form-group">
    <label>Login</label>
    <input name="usuario" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $user['usuario']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite o login para acessar o painel.</small>
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input name="senha" type="password" class="form-control shadow-none border-0 w-50" value="<?php echo $user['senha']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite a senha para acessar o painel.</small>
  </div>
  <hr class="border-white mt-4">
  <div class="form-group">
    <label>Nome completo</label>
    <input name="nome" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $user['nome']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite seu nome completo pra registro no sistema.</small>
  </div>
  <div class="form-group">
    <label>Apelido</label>
    <input name="apelido" type="text" class="form-control shadow-none border-0 w-50" value="<?php echo $user['apelido']; ?>">
    <small id="emailHelp" class="form-text text-white">Digite um apelido para organização no sistema.</small>
  </div>
  <button type="submit" class="btn btn-danger shadow-none border-0">Editar</button>
</form>
<?php } ?>
<!--EDITAR USUARIO-->

<!--LISTA DE USUARIOS---> 
<?php if(isset($_GET['p']) && $_GET['p'] == "list"){ ?>
  <?php if(isset($_GET['a']) && $_GET['a'] == "send"){ ?>
    <div class="mt-3 alert alert-success" role="alert">
    <i class="bi bi-hand-thumbs-up"></i>&nbsp;Usuário excluido com sucesso.
    </div>
<?php } ?>
<?php if(isset($_GET['a']) && $_GET['a'] == "erro"){ ?>
    <div class="mt-3 alert alert-danger" role="alert">
    <i class="bi bi-x-lg"></i>&nbsp;Ocorreu um erro, procure o webmaster.
    </div>
<?php } ?>
  <a href="user?p=creat"><button type="button" class="btn btn-danger shadow-none border-0 mt-3"><i class="bi bi-person-plus-fill"></i>&nbsp;Criar usuário</button></a>
  <hr class="border-white">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col"><i class="bi bi-people-fill"></i>&nbsp;Apelido</th>
      <th scope="col"><i class="bi bi-hand-index-fill"></i>&nbsp;Ação</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $busca_user = "SELECT * FROM usuario ORDER BY id DESC";
    $query_user = mysqli_query($conexao, $busca_user);
    while($users = mysqli_fetch_array($query_user)){
  ?>
    <tr>
      <td class="pt-3"><?php echo $users['apelido'];?></td>
      <td>
      <a href="user?p=edit&v=<?php echo $users['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-pencil-square"></i></button></a>
      <a href="../validation/user?valid=delete&v=<?php echo $users['id']; ?>"><button type="button" class="btn btn-danger shadow-none border-0"><i class="bi bi-trash3-fill"></i></button></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
<!--LISTA DE USUARIOS--> 

</section>
</div>
</div>


</div>
<?php include('../archive/sakurajima_footer.php'); ?>
