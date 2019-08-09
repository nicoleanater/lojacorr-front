<?php
require_once('./config.php');
require_once(DBAPI);


function login() {
    if (!empty($_POST['user'])) {
        $user = $_POST['user'];
        // echo "<script>console.log({$user['email']});</script>";
        $usuario = findLogin($user['email'], $user['password']);
        // echo "<script>console.log('Debug Objects: . $usuario . ' );</script>";
    }
}


?>