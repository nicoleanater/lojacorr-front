<?php
require_once('./config.php');
require_once(DBAPI);
session_start();


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
            header('location:' . BASEURL . 'index.php');
        }
    }
}

function logout() {
    session_destroy();  
    // header('location: login.php');
}
?>