<?php
require_once('config.php');
require_once(DBAPI);

function login() {
    if (isset( $_SESSION['user_id'])) {
        header('location: index.php');
    }
        
    if (!empty($_POST['user'])) {
        $user = $_POST['user'];
        $user = findLogin($user['email'], $user['password']);
        if (isset($user)){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('location: index.php');
        }
    }
}


$usuarios = null;
$usuario = null;

function index() {
	global $usuarios;
	$usuarios = find_all('users');
}


?>

<?php
function add() {
  if (!empty($_POST['user'])) {
    $user = $_POST['user'];
    $address = $_POST['address'];
    // echo "<script>console.log(".json_encode($address).");</script>";
    
    $address_id = save('address', $address);
    $user['address_id'] = $address_id;
    save('users', $user);
    
    header((!isset( $_SESSION['user_id'])) ? 'location:' . BASEURL . 'index.php' : 'location: index.php');
  }
}
?>

<?php

function edit() {
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['usuario'])) {
      $usuario = $_POST['usuario'];
      
      update('users', $id, $usuario);
      header('location: index.php');
    } else {
      global $usuario;
      $usuario = find('users', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>
<?php

function view($id = null) {
  global $usuario;
  $usuario = find('users', $id);
}
?>
<?php

function delete($id = null) {
  global $usuario;
  $usuario = remove('users', $id);
  header('location: index.php');
}

?>