<?php
    require_once('../functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Listagem de Usuários</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Cliente</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Telefone</th>
	</tr>
</thead>
<tbody>
<?php if ($usuarios) : ?>
<?php foreach ($usuarios as $usuario) : ?>
	<tr>
		<td><?php echo $usuario['id']; ?></td>
		<td><?php echo $usuario['name']; ?></td>
		<td><?php echo $usuario['email']; ?></td>
		<td><?php echo $usuario['phone']; ?></td>
		
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Detalhes de Endereço</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>