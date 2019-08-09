<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<?php  session_start(); ?>

<?php if ($db) : ?>
	<?php
		!isset( $_SESSION['user_id']) ? include(HOME) : header('location: login.php');
		// echo "<script>console.log(".$_SESSION['user_id'].");</script>";
	?>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>