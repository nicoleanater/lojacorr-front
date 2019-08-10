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
	$usuarios = find_all('user');
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
    save('user', $user);
    
    header((!isset( $_SESSION['user_id'])) ? 'location:' . BASEURL . 'index.php' : 'location: index.php');
  }
}
?>
<?php

function view($id = null) {
  global $usuario;
  $usuario = find('user', $id);
}
?>