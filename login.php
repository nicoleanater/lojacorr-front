<?php 
    require_once('functions.php'); 
    login();
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database(); ?>

<?php include(HEADER_TEMPLATE); ?>
<h1>Login</h1>
<hr />

<?php if ($db) : ?>
<div>
    <form action="login.php" method="post" class="form-login">
        <div class="form-group">
            <label for="login-input">Email</label>
            <input type="email" class="form-control" id="login-input" name="user[email]" placeholder="exemplo@dominio.com">
        </div>
        <div class="form-group">
            <label for="password-input">Senha</label>
            <input type="password" class="form-control" id="password-input" name="user[password]" placeholder="••••••">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <p>Ainda não tem cadastro? Clique <a href="<?php echo BASEURL; ?>usuarios/add.php">aqui</a>!</p>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>