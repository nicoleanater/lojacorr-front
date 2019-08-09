<?php
require_once('../config.php');
require_once(DBAPI);

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
    
    
    $address_id = save('address', $address);
    // echo "<script>console.log('Debug Objects: . $address_id . ' );</script>";
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
