<?php
require_once 'app/include/database.php';
require_once 'app/include/functions.php';
if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $insert_result = insert_subscribe($link, $email);
    $header = 'Location: /?subscribe=';
    $header .= $insert_result;
    header($header);
}else {
    header('Location: /');
}
?>