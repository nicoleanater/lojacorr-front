<?php 
  require_once('../functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuário</h2>

<form action="add.php" method="post">
  <hr />
  <h4>Dados Pessoais</h4>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="user['name']">
    </div>
    <div class="form-group col-md-3">
      <label for="phone">Telefone</label>
      <input type="text" class="form-control" name="user['phone']">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-4">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="user['email']">
    </div>
    <div class="form-group col-md-3">
      <label for="password">Senha</label>
      <input type="password" class="form-control" name="user['password']">
    </div>
  </div>

  <h4>Endereço</h4>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="city">Rua</label>
      <input type="text" class="form-control" name="address['street']">
    </div>
    <div class="form-group col-md-2">
      <label for="city">Número</label>
      <input type="text" class="form-control" name="address['number']">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="state">Bairro</label>
      <input type="text" class="form-control" name="address['district']">
    </div>
    <div class="form-group col-md-3">
      <label for="city">Cidade</label>
      <input type="text" class="form-control" name="address['city']">
    </div>
    <div class="form-group col-md-2">
      <label for="city">Estado</label>
      <input type="text" class="form-control" name="address['state']">
    </div>
  </div>


   
   <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="<?php if (!isset( $_SESSION['user_id'])) echo BASEURL ?>index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>