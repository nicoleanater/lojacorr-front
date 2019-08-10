<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Lojacorr Usuários</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="nav-item active">
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand header-text">HOME</a>
        </div>
        <?php if (isset( $_SESSION['user_id'])) : ?>
          <div class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>usuarios">Usuários</a>
          </div>
          <div class="nav-item logout-link">
            <a class="nav-link" href="<?php echo BASEURL; ?>logout.php">Sair</a>
          </div>
        <?php endif; ?>
      </div>
    </nav>


<main class="container">