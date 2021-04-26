<?php
session_start();
if (!empty($_POST)) {
    $_SESSION = array(
        'loginname' => $_POST['loginname'],
        'is_connected' => true
    );
}

if ($_GET['logout'] = 'yes') {
    session_destroy();
}

header('Location: /index.php');