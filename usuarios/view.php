<?php 
	require_once('../functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2><?php echo $usuario['name']; ?></h2>
<hr>

<div class="d-flex">
	<h4 class="details-subtitle">Dados Pessoais</h4>
	<div class="personal-data">
		<div><b>Email: </b><?php echo $usuario['email']; ?></div>
		<div><b>Telefone: </b><?php echo $usuario['phone']; ?></div>
	</div>
	<h4 class="details-subtitle">Endereço</h4>
	<div class="personal-data">
		<div><b>Rua: </b><?php echo $usuario['street']; ?></div>
		<div><b>Número: </b><?php echo $usuario['number']; ?></div>
		<div><b>Bairro: </b><?php echo $usuario['district']; ?></div>
	</div>
	<div class="personal-data">
		<div><b>Estado: </b><?php echo $usuario['state']; ?></div>
		<div><b>Cidade: </b><?php echo $usuario['city']; ?></div>
	</div>
</div>



<div id="actions" class="row buttons-container">
	<div class="col-md-12">
	  <a href="index.php" class="btn btn-primary">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>