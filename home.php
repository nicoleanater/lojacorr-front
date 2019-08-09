<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Painel de Usuários</h1>
<hr />
<p>Olá <b><?php echo $_SESSION['user_name'] ?></b>! O que você deseja fazer?</p>

<?php if ($db) : ?>

<div class="row">
	<div class="home-container container">
		<a href="usuarios" class="home-action">
			<div class="col-xs-12 text-center d-flex">
				<i class="fa fa-list"></i>
				Visualizar Usuários
			</div>
		</a>
		<a href="usuarios/add.php" class="home-action">
			<div class="col-xs-12 text-center d-flex">
				<i class="fa fa-plus"></i>
				Criar Usuário
			</div>
		</a>
		
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>